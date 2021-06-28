$(document).ready(function(){
  $('#tablaahorro').load('vistas/ahorro/tablaahorro.php');
  $('#listametas').load('vistas/ahorro/listameta.php');
  $('#listametasSE').load('vistas/ahorro/listameta.php');
});
function sugerencias() {
  sueldo=parseFloat($('#sueldo').val());
  cantidades=calcularSugerencia(sueldo);
  $('#ahorrodiario').val(cantidades[0]);
  $('#ahorrosemanal').val(cantidades[1]);
  agregarmeta();
  return false;
}
function calcularSugerencia(sueldo){
  sugernciaD=Math.floor((sueldo/3)/15);
  sugernciaS=Math.floor(sugernciaD*7);
  sugerenciasf=[sugernciaD,sugernciaS];
  return sugerenciasf;
}
function agregarahorroDiario() {
  $.ajax({
    type: "POST",
    data: $('#frmAhorroDiario').serialize(),
    url: "procesos/ahorro/agregarahorro.php",
    success:function(respuesta) {
      if (respuesta == 1) {
        $('#tablaahorro').load('vistas/ahorro/tablaahorro.php');
        swal(";D","se agrego tu ahorro","success");
      } else {
        swal("D:","no se pudo agregar"+respuesta,"error");
      }
    }
  });
  return false;
}
function agregarmeta() {
  $.ajax({
    type: "POST",
    data: $('#frmnuevoahorro').serialize(),
    url: "procesos/metas/agregarmeta.php",
    success:function(respuesta) {
      if (respuesta == 1) {
        $('#listametas').load('vistas/ahorro/listameta.php');
        $('#listametasSE').load('vistas/ahorro/listameta.php');
        swal(";D","se agrego tu meta","success");
      } else {
        swal("D:","no se pudo meta"+respuesta,"error");
      }
    }
  });
  return false;
}
function obtenerDatos(idahorro) {
  $.ajax({
    type: "POST",
    data: "idahorro="+idahorro,
    url: "procesos/ahorro/obtenerdatos.php",
    success:function(respuesta) {
      respuesta= jQuery.parseJSON(respuesta);
      $('#cantidadU').val(respuesta['cantidad']);
      $('#idahorro').val(respuesta['idahorro']);
    }
  });
}
function actualizarCantidad() {
  $.ajax({
    type: "POST",
    data: $('#frmahorroUpdate').serialize(),
    url: "procesos/ahorro/actualizarahorro.php",
    success:function(respuesta) {
      if (respuesta == 1) {
        $('#tablaahorro').load('vistas/ahorro/tablaahorro.php');
        swal(";D","se actualizo tu ahorro","success");
      } else {
        swal("D:","no se pudo actualizar tu ahorro"+respuesta,"error");
      }
    }
  });
  return false;
}
function eliminarAhorro(idahorro) {
  swal({
    title: "Sequro que quieres quitar este ahorro?",
    text: "Una vez eliminado no podras recuperarlo",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "idahorro="+idahorro,
        url: "procesos/ahorro/eliminarahorro.php",
        success:function(respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            $('#tablaahorro').load('vistas/ahorro/tablaahorro.php');
            swal(";D","se elimino tu ahorro","success");
          } else {
            swal("D:","no se pudo eliminar tu ahorro"+respuesta,"error");
          }
        }
      });
    }
  });
}
function agregarahorroSemanal() {
  $.ajax({
    type: "POST",
    data: $('#frmAhorroSemanal').serialize(),
    url: "procesos/ahorro/agregarahorroSE.php",
    success:function(respuesta) {
      if (respuesta == 1) {
        $('#tablaahorro').load('vistas/ahorro/tablaahorro.php');
        swal(";D","se agrego tu ahorro","success");
      } else {
        swal("D:","no se pudo agregar"+respuesta,"error");
      }
    }
  });
  return false;
}