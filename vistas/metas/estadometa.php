<?php
    include "../../clases/conexion.php";
    $obj= new Conexion();
    $conexion=$obj->conectar();
    $idmeta=$_GET['idmeta'];
    $sql="SELECT SUM(cantidad) FROM t_ahorro WHERE id_meta='$idmeta'";
    $result=mysqli_query($conexion,$sql);
    $cantidades=mysqli_fetch_row($result);
    $sql="SELECT meta FROM t_metas WHERE id_meta='$idmeta'";
    $result=mysqli_query($conexion,$sql);
    $meta=mysqli_fetch_row($result);
    $faltante=$meta[0]-$cantidades[0];
?>
<label for="totalahorro">Tu total de ahorro es:</label>
<input type="text" readonly id="totalahorro" class="form-control" value="<?php echo $cantidades[0]; ?>">
<label for="tuMeta">Tu Meta es:</label>
<input type="text" readonly id="tuMeta" class="form-control" value="<?php echo $meta[0]; ?>">
<p>
    Te falta por ahorar <?php echo $faltante; ?>
</p>
