<?= $this->extend("layouts/main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<h1><?= $title ?></h1> <!-- dynamic title -->

<!-- Delete button -->
<a href="/citest/public/blog/delete/<?= $post["post_id"] ?>" class="btn btn-danger">Delete</a>

<!-- Edit button -->
<a href="/citest/public/blog/edit/<?= $post["post_id"] ?>" class="btn btn-primary">Edit</a>

<?= $this->endSection() ?>
<!-- End the content section -->