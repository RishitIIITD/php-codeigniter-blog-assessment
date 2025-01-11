<?= $this->extend("layouts/admin_main") ?>
<!-- Load the layout first -->

<?= $this->section("content") ?>
<!-- Load the content section -->

<div class="container mt-5">
    <h1 class="mb-4"><?= $meta_title ?></h1>
    <div class="text-right mb-3">
        <a href="/citest/public/blog/new" class="btn btn-success">Add New Blog</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>S.no</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $index => $post): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($post['post_title'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars(substr($post['post_content'], 0, 50), ENT_QUOTES, 'UTF-8') ?>...</td>
                        <td><?= htmlspecialchars($post['post_author'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td>
                            <a href="/citest/public/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="/citest/public/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No posts found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?= $this->endSection() ?>
<!-- End the content section -->