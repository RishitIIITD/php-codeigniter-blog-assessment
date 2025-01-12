<?= $this->extend("layouts/admin_main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<h1><?= $meta_title ?></h1> <!-- dynamic title -->

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <form method="post" action="/citest/public/blog/new">
            <div class="form-group mb-3">
                <label for="post_author">Author Name</label>
                <input type="text" name="post_author" id="post_author" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="post_title">Title</label>
                <input type="text" name="post_title" id="post_title" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="post_content">Content</label>
                <textarea class="form-control" name="post_content" id="post_content" rows="10"></textarea>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-success btn-sm">Create</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
<!-- End the content section -->