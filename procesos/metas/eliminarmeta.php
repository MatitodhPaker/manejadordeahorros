<?php
  include "../../clases/metas.php";
  $Metas=new Meta();
  $idmeta=$_POST['idmeta'];
  echo $Metas->eliminatMeta($idmeta);
?>