
<div class="form-group">
    <label for="total_pago" class="col-lg-3 control-label requerido">Total pago</label>
    <div class="col-lg-8">
    <input type="number" name="total_pago" id="total_pago" class="form-control" value="{{old('total_pago', $data->total_pago ?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="fecha" class="col-lg-3 control-label requerido">Fecha</label>
    <div class="col-lg-8">
    <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="{{old('fecha', $data->fecha?? '')}}" required/>
    </div>
</div>


{{--Llave foreign key de matricula  --}}
<div class="form-group ">
    <label for="matricula_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Matricula</label>
    <div class="col-sm-12 col-md-7">
        <select name="matricula_id" id="matricula_id" class="form-control">
             @foreach ($matricula1 as $matriculan) 
            <option value="{{$matriculan->id}}">{{$matriculan->id}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>