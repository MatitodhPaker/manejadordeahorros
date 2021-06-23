<!doctype html>
<html lang="en">
  <head>
    <title>Metas conseguidas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include "dependencias.php" ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <?php include "menu.php"?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <?php include "vistas/metas/tablametas.php" ?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <hr>
          <label for="nueva meta">Nueva meta a consegir</label>
          <input type="text" disabled class="form-control" id="nevameta">
        </div>
      </div>
    </div>
  </body>
</html>