<?= $this->extend("layouts/main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<div class="blog-post">
    <h1 class="blog-post-title"><?= $title ?></h1> <!-- dynamic title -->
    <p class="blog-post-meta">
        <?= date("F j, Y", strtotime($post["post_created_at"])) ?> by <?= $post["post_author"] ?> <!-- dynamic date and author -->
    </p>
    <div class="blog-post-content">
        <?= $post["post_content"] ?> <!-- dynamic content -->
    </div>
</div>
<div class="comment-section">
    <h3>Comments</h2>
    <!-- display the comments -->
    <?php if (!empty($comments)): ?>
        <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <p><strong><?= $comment["name"] ?>:</strong> <?= $comment["comment"] ?></p>
                <?php $comment['created_at'] = date('Y-m-d', strtotime($comment['created_at'])); ?>
                <p><small>Posted on: <?= $comment["created_at"] ?></small></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No comments yet.</p>
    <?php endif; ?>

    <!-- add a new comment -->
    <form action="/citest/public/blog/display/<?= $post["post_id"] ?>" method="post">
        <div class="form-group">
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" name="user_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>
<!-- End the content section -->