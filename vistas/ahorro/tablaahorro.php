<div class="table table-responsive">
    <table class="table table-condensed table-hover" id="equiposDataTable">
        <thead>
            <th>Cantidad</th>
            <th>Fecha del ahorro</th>
            <th>Tipo de ahorro</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            
            <tr>
                <td> </td>
                <td> </td>
                <td></td>
                <td>
                    <span class="btn btn-warning">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger">
                        Eliminar
                    </span>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){
        $('#equiposDataTable').DataTable();
    });
</script>