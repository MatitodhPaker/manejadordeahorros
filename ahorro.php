<!doctype html>
<html lang="en">
  <head>
    <title>Ahorros</title>
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
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#nuevoahorro">
            Nuevo ahorro
          </button>
          <?php include "vistas/ahorro/modalnuevoahorro.php" ?>
        </div>
      </div>
      <div class="row mt-4">
        <?php include "vistas/ahorro/tipodeahorro.php" ?>
      </div>
      <div class="row mt-4">
        <div class="col">
          <div id="tablaahorro"></div>
          <?php include "vistas/ahorro/modalactualizarahorro.php" ?>
        </div>
      </div>
    </div>
  </body>
</html>
<script src="public/js/ahorro.js"></script>