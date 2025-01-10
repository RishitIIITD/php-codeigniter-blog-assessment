<div class="card col-12 col-sm-6 col-md-4" style="width: 18rem;">
  <img src="/citest/public/assets/images/avatar1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $title ?></h5>
    <p class="card-text">Author: <?= $author ?></p>
    <p class="card-text"><small class="text-muted">Posted on: <?= $publication_date ?></small></p>
    <p class="card-text"><?= $content ?></p>
    <a href="/citest/public/blog/display/<?= $id ?>" class="btn btn-primary">Read more</a>
  </div>
</div>