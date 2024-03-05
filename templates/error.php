<!DOCTYPE html>
<html lang="en">

<head>
  <?php require __DIR__ . "/head.php" ?>
</head>

<body>
  <div class="container">
    <div class="alert alert-danger mt-5">
      <?= $e->getMessage() ?>
      <a href="" onclick="reload()">Reload</a>
    </div>
  </div>
</body>

</html>