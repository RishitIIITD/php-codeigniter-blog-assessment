<?php

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentModel;

class Blog extends BaseController
{
    public function index()
    {
        $data = [       // pass dynamic data to different pages/views
            "meta_title" => "Homepage",
            "title" => "List of Blog posts",
        ];

        $posts = ["Title1", "Title2", "Title3"];        // create an array of posts
        $data["posts"] = $posts;        // add this array of posts to the data array

        $data2 = [
            "meta_title" => "Homepage",
            "title" => "List of Blog posts",
        ];

        $model = new BlogModel();
        $posts = $model->findAll();     // get all the posts from the database
        $data2["posts"] = $posts;        // add the posts to the data array

        return view('blog', $data2);        // keep the content separate
    }

    public function display($id)
    {
        $model = new BlogModel();       // instantiate a new BlogModel object
        $post = $model->find($id);      // find the post with the given id

        if ($post){     // if post is found
            $data = [
                "meta_title" => "Blog Detail Page",
                "title" => $post["post_title"],
                "post" => $post
            ];

            // Load comments for the post
            $commentModel = new CommentModel();
            $comments = $commentModel->where("blog_id", $id)->findAll();
            $data["comments"] = $comments;

            // Handle form submission
            if ($this->request->getMethod() == "POST") {
                $commentData = [
                    'blog_id' => $id,
                    'name' => $this->request->getPost('user_name'),
                    'email' => $this->request->getPost('email'),
                    'comment' => $this->request->getPost('comment')
                ];
    
                if ($commentModel->save($commentData)) {
                    echo "Comment saved successfully!";
                    return redirect()->to(base_url('/citest/public/blog/display/' . $id));
                }
                else {
                    echo "Comment not saved :(";
                    return redirect()->to(base_url('/citest/public/blog/display/' . $id));
                }
            }
        }
        else{       // if post is not found
            $data = [
                "meta_title" => "Post Not Found!!",
                "title" => "Post Not Found!!",
            ];
        }

        return view('display_post', $data);
    }

    public function admin(){
        $model = new BlogModel();
        $posts = $model->findAll();

        $data = [
            "meta_title" => "Welcome, Admin!!",
            "title" => "Admin Panel",
            "posts" => $posts
        ];

        return view('admin_panel', $data);
    }

    public function post($id)
    {
        $model = new BlogModel();       // instantiate a new BlogModel object
        $post = $model->find($id);      // find the post with the given id

        if ($post){     // if post is found
            $data = [
                "meta_title" => "Blog Detail Page",
                "title" => $post["post_title"],
                "post" => $post
            ];
        }
        else{       // if post is not found
            $data = [
                "meta_title" => "Post Not Found!!",
                "title" => "Post Not Found!!",
            ];
        }

        return view('single_post', $data);
    }

    public function new(){
        $data = [
            "meta_title" => "New Post",
            "title" => "Create new Post",
        ];

        // Load the database
        $db = \Config\Database::connect();
        
        // Check if the table exists
        if ($db->tableExists('posts')) {
            echo "Table exists!";
        } else {
            echo "Table does not exist!";
        }
        echo "<br>";

        echo "Request Method: ";
        echo $this->request->getMethod();
        echo "<br>";
        
        // if the form is submitted (posted)
        if ($this->request->getMethod() == "POST") {
            echo "POST method called";
            // instantiate a new BlogModel object
            $model = new BlogModel();

            // Debugging: Print the POST data
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';

            // Save the data from the form
            if ($model->save($_POST)) {
                echo "Data saved successfully!";
            } else {
                echo "Failed to save data.";
                print_r($model->errors());
            }
        }
        return view("new_post", $data);
    }

    public function delete($id){
        $model = new BlogModel();
        $post = $model->find($id);      // find the post with the given id

        if ($post){     // if the post is found
            $model->delete($id);        // delete that post id
            return redirect()->to(base_url("/citest/public/blog"));
        }
        else{
            return redirect()->to(base_url("/citest/public/blog"));
        }
    }

    public function edit($id){
        $model = new BlogModel();
        $post = $model->find($id);

        $data = [
            "meta_title" => "Edit Post",
            "title" => $post["post_title"],
            "post" => $post
        ];

        if ($this->request->getMethod()=="POST"){       // when the form is submitted
            $model = new BlogModel();
            $_POST["post_id"] = $id;
            $model->save($_POST);       // update it
            $post = $model->find($id);      // find the updated data
        }

        $data["post"] = $post;      // add the updated data to the data array

        return view("edit_post", $data);        // send the data to the view
    }
}
