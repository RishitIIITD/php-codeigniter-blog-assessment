<?php

use CodeIgniter\CodeIgniter;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?= (isset($meta_title) ? $meta_title : "CodeIgniter default title") ?></title>
    <!-- If meta title is present, set it as title. Else, default title will be set. -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand" href="/citest/public">Ci4 Tutorial</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/citest/public/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/citest/public/blog/post">Post</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="container">