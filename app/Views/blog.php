<?= $this->extend("layouts/main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<h1><?= $title ?></h1> <!-- dynamic title -->

<div class="row">
    <?= $this->include("widgets/sidebar") ?>
    <!-- add the sidebar widget -->
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <!-- call Blog.php from Libraries and its method -> postItem() -->
                <?= view_cell("\App\Libraries\Blog::postItem", $post) ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<!-- End the content section -->