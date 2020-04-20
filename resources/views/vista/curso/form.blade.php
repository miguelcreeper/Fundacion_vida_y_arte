
<div class="form-group">
    <label for="salon" class="col-lg-3 control-label requerido">Salón</label>
    <div class="col-lg-8">
    <input type="text" name="salon" id="salon" class="form-control" value="{{old('salon', $data->salon ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="sede" class="col-lg-3 control-label requerido">Sede</label>
    <div class="col-lg-8">
    <input type="text" name="sede" id="sede" class="form-control" value="{{old('sede', $data->sede ?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="fecha_inicio" class="col-lg-3 control-label requerido">Fecha Inicio</label>
    <div class="col-lg-8">
    <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{old('fecha_inicio', $data->fecha_inicio?? '')}}" required/>  
    </div>
</div>

<div class="form-group">
    <label for="fecha_fin" class="col-lg-3 control-label requerido">Fecha Final</label>
    <div class="col-lg-8">
    <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{old('fecha_fin', $data->fecha_fin?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="cupos_maximos" class="col-lg-3 control-label requerido">Cupo Maximo</label>
    <div class="col-lg-8">
    <input type="number" name="cupos_maximos" id="cupos_maximos" class="form-control" value="{{old('cupos_maximos', $data->cupos_maximos?? '')}}" required/>
    </div>
</div>




{{--Llave foreign key de profesor  --}}
<div class="form-group ">
    <label for="profesor_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profesor</label>
    <div class="col-sm-12 col-md-7">
        <select name="profesor_id" id="profesor_id" class="form-control">
             @foreach ($profesor1 as $profesorn) 
            <option value="{{$profesorn->id}}">{{$profesorn->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>


  
  {{--Llave foreign key de tipo  --}}
<div class="form-group ">
    <label for="tipo_curso_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tipo Curso</label>
    <div class="col-sm-12 col-md-7">
        <select name="tipo_curso_id" id="tipo_curso_id" class="form-control">
             @foreach ($tipo1 as $tipo_curson) 
            <option value="{{$tipo_curson->id}}">{{$tipo_curson->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

  
{{--Llave foreign key de Jornada --}}
<div class="form-group ">
    <label for="jornada_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jornada</label>
    <div class="col-sm-12 col-md-7">
        <select name="jornada_id" id="jornada_id" class="form-control">
             @foreach ($jornada1 as $Jornadan) 
            <option value="{{$Jornadan->id}}">{{$Jornadan->descripcion}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

  
{{--Llave foreign key de estado  --}}
<div class="form-group ">
    <label for="estado_curso_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado Curso</label>
    <div class="col-sm-12 col-md-7">
        <select name="estado_curso_id" id="estado_curso_id" class="form-control">
             @foreach ($estado1 as $estado_curson) 
            <option value="{{$estado_curson->id}}">{{$estado_curson->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

