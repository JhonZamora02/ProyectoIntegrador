@extends('layouts.plantilla') 
@section('contenido') 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Editar Los Servicios</h3> 
            @if (count($errors)>0) 
            <div class="alert alert-danger"> 
                <ul> 
                    @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li> 
                    @endforeach 
                </ul> 
            </div> 
            @endif 
        </div> 
    </div> 
{{Form::open(array('action'=>array('ServicioController@update', $servicios->id_servicio),'method'=>'patch'))}} 
    <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="idservicio">Codigo Del Servicio</label> 
    <input type="number" name="idservicio" id="idservicio" class="form-control" value="{{$servicios->id_servicio}}"> 
            </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="idgarantia">Codigo De La Garantia</label> 
                    <input type="text" name="idgarantia" id="idgarantia" class="form-control" 
value="{{$servicios->garantia_id_garantia}}"> 
                </div> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="idempleado">Codigo Del Empleado</label> 
                    <input type="text" name="idempleado" id="idempleado" class="form-control" 
value="{{$servicios->empleado_id_empleado}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="idvehiculo">Codigo Del Vehiculo</label> 
                    <input type="text" name="idvehiculo" id="idvehiculo" class="form-control" 
value="{{$servicios->vehiculo_id_vehiculo}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="idcita">Codigo De la Cita</label> 
                    <input type="text" name="idcita" id="idcita" class="form-control" 
value="{{$servicios->cita_id_cita}}"> 
                </div> 
            </div>  
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group"> <br> 
                <label for="precio">Precio</label> 
  <input type="text" name="precio" id="precio" class="form-control" value="{{$servicios->precio}}"> 
               </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"><br> 
                    <label for="comentario">Comentario</label> 
   <input type="text" name="comentario" id="comentario" class="form-control" value="{{$servicios->comentarios}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="tservicio">Tipo de servicio</label> 
   <input type="text" name="tservicio" id="tservicio" class="form-control" value="{{$servicios->tipo_servicios}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
              <a class="btn btn-info" type="reset" href="{{url('servicio')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                     </div> 
                  </div> 
               </div> 
           {!!Form::close()!!} 
@endsection