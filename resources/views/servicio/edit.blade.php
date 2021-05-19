@extends('layouts.plantilla') 
@section ('contenido') 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Editar Servicios</h3> 
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
{{Form::open(array('action'=>array('ServicioController@update', $servicios->cod_servicio),'method'=>'patch'))}} 
    <div class="row"> 
    div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
             <div class="form-group"> 
             <br><label for="codigos">Código del servicio</label> 
<input type="number" name="codigos" id="codigos" class="form-control" placeholder= "Digite el codigo del servicio"> 
            </div> </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> 
                    <br> 
                 <label for="codigog">Código de la garantia</label> 
<input type="text" name="codigog" id="codigog" class="form-control" placeholder="Digite el codigo de la garantia"> 
               </div> 
   </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
                   <br><label for="codigoc">Código de la cita</label> 
<input type="text" name="codigoc" id="codigoc" class="form-control" placeholder="Digite el codigo de la cita"> 
               </div> 
           </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
               <br> <label for="tposervicio">Tipo de servicio a realizar</label> 
<input type="text" name="tposervicio" id="tposervicio" class="form-control" placeholder="Digite el tipo de servicio a realizar"> 
           </div> </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
              <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                     </div> 
                  </div> 
               </div> 
           {!!Form::close()!!} 
@endsection