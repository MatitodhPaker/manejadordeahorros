<?php
    include "../../clases/conexion.php";
    $obj= new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT id_meta, meta, fecha_meta FROM t_metas";
    $result=mysqli_query($conexion,$sql);
?>
<div class="table table-responsive">
    <table class="table table-condensed table-hover" id="metasDataTable">
        <thead>
            <th>Cantidad de la meta</th>
            <th>Fecha de la meta</th>
            <th>Estado</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php while($ver=mysqli_fetch_row($result)): ?>
            <tr>
                <td> <?php echo $ver[1] ?></td>
                <td> <?php echo $ver[2] ?> </td>
                <td>
                    <span class="btn btn-outline-primary" onclick="verEstado(<?php echo $ver[0] ?>)">
                        Ver estado
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarMeta(<?php echo $ver[0] ?>)">
                        Eliminar
                    </span>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){
        $('#metasDataTable').DataTable();
    });
</script>