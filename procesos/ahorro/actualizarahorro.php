<?php
  include "../../clases/ahorro.php";
  $ahorros=new Ahorro();
  $datos= array(
        "idahorro"=>$_POST['idahorro'],
        "cantidad"=>$_POST['cantidadU']
  );
  echo $ahorros->Actualizarahoro($datos);
?>