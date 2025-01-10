<?= $this->extend("layouts/main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<h1><?= $title ?></h1> <!-- dynamic title -->

<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <form method="post">
            <div class="form-group">
                <label for="post_title">Title</label>
                <input type="text" name="post_title" id="post_title" class="form-control" value="<?= $post["post_title"] ?>">
            </div>
            <div class="form-group">
                <label for="post_content">Content</label>
                <textarea class="form-control" name="post_content" id="post_content" rows="10"><?= $post["post_content"] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
<!-- End the content section -->