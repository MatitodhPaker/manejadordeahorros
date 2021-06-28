<?php
  include "../../clases/ahorro.php";
  $ahorros=new Ahorro();
  $idahorro=$_POST['idahorro'];
  echo $ahorros->eliminarAhorro($idahorro);
?>