<?php

require_once __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require __DIR__ . "/templates/head.php" ?>
</head>

<body>
  <div class="container">
    <h1>OOPP - Object Oriented Programming Productions</h1>
    <div class="row row-cols-3 g-5" style="height: 380px">

      <?php foreach ($productions as $index => $production): ?>
        <div class="col h-100">
          <?php require __DIR__ . "/templates/prod_card.php" ?>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</body>

</html>