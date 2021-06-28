<?php
  include "../../clases/ahorro.php";
  $ahorros=new Ahorro();
  $id_meta=$_POST['idMeta'];
  $cantidad=$_POST['ahorrosemanal'];
  $tipoahorro=$_POST['tipo_ahorro'];
  echo $ahorros->agregarahorro($cantidad,$tipoahorro,$id_meta);
?>