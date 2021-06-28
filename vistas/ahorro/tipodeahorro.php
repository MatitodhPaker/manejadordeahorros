<div class="col">
  <form id="frmAhorroDiario" onsubmit="return agregarahorroDiario()">
    <div id="listametas"></div>
    <input type="text" hidden value="ahorro diario" name="tipo_ahorro">
    <label for="ahorrodiario">Ahorro diario</label>
    <input type="text" class="form-control" id="ahorrodiario" name="ahorrodiario" required pattern="[0-9]+">
    <br>
    <button class="btn btn-primary"> ahorro diario</button>
  </form>
</div>
<div class="col">
  <form id="frmAhorroSemanal" onsubmit="return agregarahorroSemanal()">
    <div id="listametasSE"></div>
    <input type="text" hidden value="ahorro semanal" name="tipo_ahorro">
    <label for="ahorrosemanal">Ahorro semanal</label>
    <input type="text" class="form-control" id="ahorrosemanal" name="ahorrosemanal">
    <br>
    <button  class="btn btn-primary"> ahorro semenal</button>
  </form>
</div>