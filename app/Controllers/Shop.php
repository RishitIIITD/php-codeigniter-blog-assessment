<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product($prod = "Laptop", $prod_id = "AMD")
    {
        echo '<h2>The product is: ' . $prod. '</h2>';
        echo "<h2>The product id is: " . $prod_id . '</h2>';
        // return view("product");
    }
}
