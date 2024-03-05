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

    <?php if ($production instanceof Movie): ?>
      <li class="list-group-item">
        <strong>Time:</strong>
        <span>
          <?= $production->getTimeText(); ?>
        </span>
      </li>
      <li class="list-group-item">
        <strong>Profit:</strong>
        <span>
          <?= $production->getProfitText(); ?>
        </span>
      </li>
    <?php elseif ($production instanceof Serie): ?>
      <li class="list-group-item">
        <strong>Seasons:</strong>
        <span>
          <?= $production->getSeasons(); ?>
        </span>
      </li>
      <li class="list-group-item">
        <strong>Episodes:</strong>
        <span>
          <?= $production->getEpisodes(); ?>
        </span>
      </li>
    <?php endif; ?>

    <li class="list-group-item">
      <strong>Genre:</strong>
      <span>
        <?= $production->getGenreName(); ?>
      </span>
    </li>
  </ul>
</div>