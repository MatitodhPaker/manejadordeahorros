<?php
    include "../../clases/conexion.php";
    $obj= new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT id_meta, meta FROM t_metas";
    $result=mysqli_query($conexion,$sql);
?>
<label for="idMeta">Meta</label>
<select name="idMeta" id="idMeta" class="form-control" required>
  <option value="">--Selecciona tu meta--</option>
    <?php while($ver=mysqli_fetch_row($result)): ?>
      <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
    <?php endwhile; ?>
</select>