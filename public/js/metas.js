$(document).ready(function(){
  $('#tablademetas').load('vistas/metas/tablametas.php');
});
function eliminarMeta(idmeta) {
  swal({
    title: "Sequro que quieres quitar esta meta?",
    text: "Una vez eliminada no podras recuperarla",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idmeta="+idmeta,
        url: "procesos/metas/eliminarmeta.php",
        success:function(respuesta) {
          if (respuesta == 1) {
            $('#tablademetas').load('vistas/metas/tablametas.php');
            swal(";D","se elimino tu meta","success");
          } else {
            swal("D:","no se pudo eliminar tu meta"+respuesta,"error");
          }
        }
      });
    }
  });
}
function verEstado(idmeta) {
  $.ajax({
    type: "POST",
    data: "idmeta="+idmeta,
    url: "vistas/metas/estadometa.php",
    success:function() {
      $('#estadodemeta').load('vistas/metas/estadometa.php?idmeta='+idmeta); 
      $('#estadodemeta').text(idmeta);
    }
  });
}