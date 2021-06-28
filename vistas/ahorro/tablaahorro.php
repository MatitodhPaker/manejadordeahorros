<?php
    include "../../clases/conexion.php";
    $obj= new Conexion();
    $conexion=$obj->conectar();
    $sql="SELECT cantidad, fecha_ahorro, tipo_ahorro, id_ahorro FROM t_ahorro";
    $result=mysqli_query($conexion,$sql);
?>
<div class="table table-responsive">
    <table class="table table-condensed table-hover" id="ahorrotabla">
        <thead>
            <th>Cantidad</th>
            <th>Fecha del ahorro</th>
            <th>Tipo de ahorro</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php while($ver=mysqli_fetch_row($result)):?>
            <tr>
                <td> <?php echo $ver[0] ?></td>
                <td> <?php echo $ver[1] ?></td>
                <td> <?php echo $ver[2] ?></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#actualizarahorroahorro" onclick="obtenerDatos(<?php echo $ver[3] ?>)">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarAhorro(<?php echo $ver[3] ?>)">
                        Eliminar
                    </span>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#ahorrotabla').DataTable();
    });
</script>
