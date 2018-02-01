<p>Главная страница</p>

<div>
<!-- Blog Post -->
<?php foreach ($this->articles as $article) { ?>
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $article['title']; ?></h2>
              <p class="card-text"><?php echo $article['content']; ?></p>
              <a href="/article/<?=$article['id']?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?php echo $article['date']; ?>
              <a href="/article/<?=$article['id']?>">Start Bootstrap</a>
            </div>
          </div>
<?php } ?>
<!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
</div>
