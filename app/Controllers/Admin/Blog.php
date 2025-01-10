<?php

namespace App\Controllers\Admin;        // define the namespace

use App\Controllers\BaseController;     // import the BaseController class

class Blog extends BaseController
{
    public function index()
    {
        echo "<h2>My list of blog posts.</h2>";
    }

    public function create_new()
    {
        return view("blog_form");
    }       // return the view for the blog form

    public function save_blog()
    {
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
    }       // save the blog post
}
