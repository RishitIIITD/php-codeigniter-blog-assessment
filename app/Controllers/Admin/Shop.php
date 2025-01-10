<?php

namespace App\Controllers\Admin;        // define the namespace

use App\Controllers\BaseController;     // import the BaseController class

class Shop extends BaseController
{
    public function index()
    {
        echo "<h2>This is an Admin Shop area</h2>";
    }

    public function product($prod, $prod_id)
    {
        echo '<h2>The Admin product is: ' . $prod. ' with Admin product ID: '.$prod_id.'</h2>';
        // return view("product");
    }
}
