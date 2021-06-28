<?php
  include "../../clases/metas.php";
  $Metas=new Meta();
  $cantidad=$_POST['cantidadahorro'];
  echo $Metas->agregarmeta($cantidad);
?>