<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;    // import the Shop class from the Admin namespace

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    function validation(){
        $shop = new Shop();     // create a new instance of the Shop class
        echo $shop->product('Shoes', "Jordan");    // call the product method of the Shop class

        echo "<br>";

        $shop = new AdminShop();    // create a new instance of the AdminShop class
        echo $shop->product('Shoes', "Jordan");    // call the product method of the AdminShop class
    }
}
