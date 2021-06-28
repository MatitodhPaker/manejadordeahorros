<?php
  include "../../clases/ahorro.php";
  $ahorros=new Ahorro();
  $idahorro=$_POST['idahorro'];
  echo json_encode($ahorros->Obtenerdatos($idahorro));
?>