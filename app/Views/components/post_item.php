<div class="container-fluid px-0"> <!-- Full-width container without padding -->
  <div class="card mb-3 w-100"> <!-- Card spans the full width -->
    <div class="row g-0">
      <div class="col-12"> <!-- Full-width column -->
        <div class="card-body px-4">
          <h5 class="card-title"><?= $title ?></h5>
          <p class="card-text">Author: <?= $author ?></p>
          <p class="card-text"><small class="text-muted">Posted on: <?= $publication_date ?></small></p>
          <p class="card-text"><?= $content ?></p>
          <a href="/citest/public/blog/display/<?= $id ?>" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
  </div>
</div>
