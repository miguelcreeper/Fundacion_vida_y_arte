
<div class="form-group">
  <label>Descripción</label>
  <select class="form-control col-lg-8" name="descripcion" id="descripcion" value="{{old('descripcion', $data->descripcion ?? '')}}" required>
    <option>mañana</option>
    <option>tarde</option>
    <option>noche</option>
  </select>
</div>

<div class="form-group">
    <label for="hora_inicio" class="col-lg-3 control-label requerido">Hora inicio</label>
    <div class="col-lg-8">
    <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" value="{{old('hora_inicio', $data->hora_inicio?? '')}}" required/>
</div>
</div>

{{-- 
<div class="form-group">
    <label for="Horai" class="col-lg-3 control-label requerido">Hora inicio</label>
    <div class="col-lg-8">
    <input type="time" name="limitetiempo" list="listalimitestiempo" step="0.001" value="{{old('Horai', $data->hora_inicio?? '')}}" required/>
</div>
</div>
  
  <datalist id="listalimitestiempo">
  
    <option value="06:40">
  
    <option value="08:24">
  
    <option value="12:31:30">
  
    <option value="23:59:59.999">
  
  </datalist> --}}

<div class="form-group">
    <label for="hora_fin" class="col-lg-3 control-label requerido">Hora fin</label>
    <div class="col-lg-8">
    <input type="time" name="hora_fin" id="hora_fin" class="form-control" value="{{old('hora_fin', $data->hora_fin?? '')}}" required/>
    </div>
</div>

