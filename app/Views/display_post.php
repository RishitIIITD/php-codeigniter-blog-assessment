<?= $this->extend("layouts/main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<div class="container my-5">
  <!-- Blog Post Section -->
  <div class="blog-post mb-5">
    <h1 class="blog-post-title"><?= $title ?></h1> <!-- dynamic title -->
    <p class="blog-post-meta text-muted">
      <?= date("F j, Y", strtotime($post["post_created_at"])) ?> by <strong><?= $post["post_author"] ?></strong> <!-- dynamic date and author -->
    </p>
    <div class="blog-post-content">
      <?= $post["post_content"] ?> <!-- dynamic content -->
    </div>
  </div>

  <!-- Comments Section -->
  <div class="comment-section mb-5">
    <h3 class="mb-3">Comments</h3>
    <!-- display the comments -->
    <?php if (!empty($comments)): ?>
      <?php foreach ($comments as $comment): ?>
        <div class="comment mb-4">
          <p><strong><?= htmlspecialchars($comment["name"]) ?>:</strong> <?= htmlspecialchars($comment["comment"]) ?></p>
          <p class="text-muted"><small>Posted on: <?= date('F j, Y', strtotime($comment['created_at'])) ?></small></p>
        </div>
        <hr>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-muted">No comments yet. Be the first to comment!</p>
    <?php endif; ?>
  </div>

  <!-- Add Comment Form -->
  <div class="add-comment-section">
    <h3 class="mb-3">Add a Comment</h3>
    <form action="/citest/public/blog/display/<?= $post["post_id"] ?>" method="post">
      <div class="form-group mb-3">
        <label for="user_name">Name:</label>
        <input type="text" id="user_name" name="user_name" class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group mb-3">
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" class="form-control" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
<!-- End the content section -->
