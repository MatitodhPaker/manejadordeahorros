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
          <div><h1>Tus Metas</h1></div>
          <br>
          <div id="tablademetas"></div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
        <hr>
          <div id="estadodemeta"></div>
        </div>
      </div>
    </div>
  </body>
</html>
<script src="public/js/metas.js"></script>