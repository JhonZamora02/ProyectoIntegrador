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
                <div class="form-group"> 
                    <br> 
                 <label for="idgarantia">Codigo De La Garantia</label> 
<input type="text" name="idgarantia" id="idgarantia" class="form-control" placeholder="Digite el código de la garantia que hace referencia"> 
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
                      <option value="1">Lamina y pintura</option>
                      <option value="2">Mecánica general</option>
                      <option value="3">Sistema eléctrico</option>
                      <option value="4">Cambio de aceite</option>
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