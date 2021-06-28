<?php
  include "conexion.php";
  class Ahorro extends Conexion{
    public function agregarahorro($cantidad, $tipoahorro, $idmeta){
      $conexion=Conexion::conectar();
      $sql="INSERT INTO t_ahorro (cantidad,tipo_ahorro,id_meta) VALUES ('$cantidad','$tipoahorro', '$idmeta')";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
    public function Obtenerdatos($idahorro){
      $conexion=Conexion::conectar();
      $sql="SELECT cantidad, id_ahorro FROM t_ahorro WHERE id_ahorro = '$idahorro'";
      $respuesta=mysqli_query($conexion,$sql);
      $cantidad=mysqli_fetch_array($respuesta);
      $datos=array(
        "cantidad"=>$cantidad['cantidad'],
        "idahorro"=>$cantidad['id_ahorro']
      );
      return $datos;
    }
    public function Actualizarahoro($datos){
      $conexion=Conexion::conectar();
      $sql="UPDATE t_ahorro SET cantidad = ? WHERE id_ahorro = ?";
      $query= $conexion->prepare($sql);
      $query->bind_param(
        'ii',$datos['cantidad'],
              $datos['idahorro']
      );
      $respuesta=$query->execute();
      return $respuesta;
    }
    public function eliminarAhorro($idahorro){
      $conexion=Conexion::conectar();
      $sql="DELETE FROM t_ahorro WHERE id_ahorro='$idahorro'";
      $respuesta=mysqli_query($conexion,$sql);
      return $respuesta;
    }
  }
?>