<div class="card h-100">
  <div class="card-header">
    <strong>
      <?= $production->getTitle(); ?>
    </strong>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <strong>Language:</strong>
      <span>
        <?= $production->getLang(); ?>
      </span>
    </li>
    <li class="list-group-item">
      <strong>Rating:</strong>
      <span>
        <?= $production->getRate(); ?>
      </span>
    </li>
    <li class="list-group-item">
      <strong>Genre:</strong>
      <span>
        <?= $production->getGenreName(); ?>
      </span>
    </li>
    <li class="list-group-item">
      <strong>Genre Desc:</strong>
      <span>
        <?= $production->getGenreDesc(); ?>
      </span>
    </li>
  </ul>
</div>