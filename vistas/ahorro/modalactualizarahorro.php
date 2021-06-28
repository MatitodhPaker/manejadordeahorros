<div class="modal fade" id="actualizarahorroahorro" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualizar cantidad de ahoro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return actualizarCantidad()" id="frmahorroUpdate">
          <input type="text" name="idahorro" id="idahorro" hidden>
          <label for="cantidadU">Cantidad Actualizada</label>
          <input type="text" name="cantidadU" id="cantidadU" class="form-control" required pattern="[0-9]+" placeholder="60">
          <br>
          <button class="btn btn-warning">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>