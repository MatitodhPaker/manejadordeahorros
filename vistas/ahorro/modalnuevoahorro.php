
<!-- Modal -->
<div class="modal fade" id="nuevoahorro" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return sugerencias()" id="frmnuevoahorro">
          <label for="sueldo">sueldo</label>
          <input type="text" name="sueldo" id="sueldo" class="form-control" required pattern="[0-9]+" placeholder="60">
          <label for="cantidadahorro">Cantidad a ahorrar</label>
          <input type="text" name="cantidadahorro" id="cantidadahorro" class="form-control" required pattern="[0-9]+" placeholder="60">
          <br>
          <button class="btn btn-primary">Comenzar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>