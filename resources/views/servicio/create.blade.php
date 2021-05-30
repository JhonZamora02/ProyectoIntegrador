@extends('layouts.plantilla') 
@section('contenido') 
 <div class="row"> 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
     <h3>Crear Servicio</h3> 
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
 {!!Form::open(array('url'=>'servicio','method'=>'POST','autocomplete'=>'off'))!!} 
       {{Form::token()}} 
       <div class="row"> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
             <div class="form-group"> 
             <br><label for="idservicio">Codigo Del Servicio</label> 
<input type="number" name="idservicio" id="idservicio" class="form-control" placeholder= "Digite el código del servicio"> 
            </div> </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <!--<div class="form-group"> 
                    <br> 
                 <label for="idgarantia">Codigo De La Garantia</label> 
<input type="text" name="idgarantia" id="idgarantia" class="form-control" placeholder="Digite el código de la garantia que hace referencia"> 
            </div> </div>-->

            <div class="form-group">
           <br>
              <label for="Role">Codigo De La Garantia</label>
                 <select name="idgarantia" id="idgarantia" class="form-control selectpicker" data-livesearch="true" required>
                     <option value="" disabled selected>Garantia:</option>
                      @foreach($garantia as $garantia)
                      <option value="{{$garantia->id_garantia}}">{{ $garantia->id_garantia }}</option>
                    @endforeach
                 </select>
          </div></div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> 
                    <br> 
                 <label for="idempleado">Codigo Del Empleado</label> 
<input type="text" name="idempleado" id="idempleado" class="form-control" placeholder="Digite el código del empleado que realizo el servicio"> 
               </div> 
   </div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> 
                    <br> 
                 <label for="idvehiculo">Codigo Del Vehiculo</label> 
<input type="text" name="idvehiculo" id="idvehiculo" class="form-control" placeholder="Digite el código del vehiculo"> 
               </div> 
   </div>
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> 
                    <br> 
                 <label for="idcita">Codigo De la Cita</label> 
<input type="text" name="idcita" id="idcita" class="form-control" placeholder="Digite el código de la cita"> 
               </div> 
   </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
                   <br><label for="precio">Precio</label> 
<input type="text" name="precio" id="precio" class="form-control" placeholder="Digite el precio del servicio"> 
               </div> 
           </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
               <br> <label for="comentario">Comentario</label> 
<input type="text" name="comentario" id="comentario" class="form-control" placeholder="Ingrese un comentario descriptivo del servicio"> 
           </div> </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group">
               <br> <label for="tservicio">Tipo de servicio</label>
                  <select name="tservicio" id="tservicio" class="form-control selectpicker" data-livesearch="true" required>
                      <option value="" disabled selected>Seleccionar:</option>
                      <option value="Lamina y pintura">Lámina y pintura</option>
                      <option value="Mecanica general">Mecánica general</option>
                      <option value="Sistema electrico">Sistema eléctrico</option>
                      <option value="Cambio de aceite">Cambio de aceite</option>
                  </select>
               </div>
           </div> 
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
      <div class="form-group"> <br> 
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button> 

<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> 

 <a class="btn btn-info" type="reset" href="{{url('servicio')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                </div> 
            </div> 
        </div> 
   {!!Form::close()!!} 
@endsection