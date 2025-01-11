<?= $this->extend("layouts/main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<h1 class="my-4"><?= $title ?></h1> <!-- dynamic title -->

<div class="row">
    <div class="col-12 col-sm-9">
        <?php foreach ($posts as $post) : ?>
            <!-- call Blog.php from Libraries and its method -> postItem() -->
            <?= view_cell("\App\Libraries\Blog::postItem", $post) ?>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
<!-- End the content section -->