<?php
  include "conexion.php";
  class Meta extends Conexion{
    public function agregarmeta($cantidad){
      $conexion=Conexion::conectar();
      $sql="INSERT INTO t_metas (meta) VALUES ('$cantidad')";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
  }
?>