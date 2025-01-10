<?php

namespace App\Libraries;

class Blog
{

    public function postItem($params)
    {
        // Truncate content to 100 words
        $content = implode(' ', array_slice(explode(' ', $params['post_content']), 0, 100));

        // Prepare data for the view
        $data = [
            'title' => $params['post_title'],
            'content' => $content,
            'author' => $params['post_author'],
            "id" => $params["post_id"],
            'publication_date' => date('Y-m-d', strtotime($params['post_created_at']))
        ];

        // call the view of the file in components -> post_item.php
        return view("components/post_item", $data);
    }
}
