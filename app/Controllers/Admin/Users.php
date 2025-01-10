<?php

namespace App\Controllers\Admin;        // define the namespace

use App\Controllers\BaseController;     // import the BaseController class

class Users extends BaseController
{
    public function index()
    {
        echo "<h2>This is a User area</h2>";
    }

    public function get_all_users()
    {
        echo '<h2>Show all users.</h2>';
        // return view("product");
    }
}
