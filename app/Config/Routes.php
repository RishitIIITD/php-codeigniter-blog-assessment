<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->setAutoRoute('true');

$routes->add("product/(:any)/(:any)", "Shop::product/$1/$2");       // define a dynamic route for the product method of the Shop class

$routes->post('blog/new', 'Blog::new');        // define a route for the new method of the Blog class



$routes->group("admin", function($routes){      // define a group of routes for the Admin area
    $routes->add("user", "Admin\Users::index");     // define a route for the index method of the Users class
    $routes->add("users", "Admin\Users::get_all_users");        //  define a route for the get_all_users method of the Users class
    $routes->add("product/(:any)/(:any)", "Admin\Shop::product/$1/$2");// define a dynamic route for the product method of the Shop class in the Admin namespace

    // Blog routes
    $routes->add("blog", "Admin\Blog::index");      // define a route for the index method of the Blog class
    $routes->get("blog/new", "Admin\Blog::create_new");     // define a route for the create_new method of the Blog class
    $routes->post("blog/new", "Admin\Blog::save_blog");     // define a route for the save_blog method of the Blog class
});