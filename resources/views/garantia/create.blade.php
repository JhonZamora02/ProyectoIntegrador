@extends('layouts.plantilla') 
@section('contenido') 
 <div class="row"> 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
     <h3>Crear Garantia</h3> 
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
 {!!Form::open(array('url'=>'garantia','method'=>'POST','autocomplete'=>'off'))!!} 
       {{Form::token()}} 
       <div class="row"> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
             <div class="form-group"> 
             <br><label for="idgarantia">Codigo De La Garantia</label> 
<input type="number" name="idgarantia" id="idgarantia" class="form-control" placeholder= "Digite el código de la garantia"> 
            </div> </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 

               <div class="form-group">
               <br> <label for="fgarantia">Fecha De La Garantia</label>
<input type="text" name="fgarantia" id="fgarantia" class="form-control" placeholder="Fecha en la que se hizo la garantia" 
value="{{date('Y-m-d H:i:s') }}" readonly>
              </div>




   </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
                   <br><label for="comentario">Comentarios</label> 
<input type="text" name="comentario" id="comentario" class="form-control" placeholder="Comentarios acerca de la garantia"> 
               </div> 
           </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
               <br> <label for="condicion">Condicion De la Garantia</label> 
<input type="text" name="condicion" id="condicion" class="form-control" placeholder="Condicion de la garantia"> 
           </div> </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group">
               <br> <label for="flimite">Fecha Limite De La Garantia</label>
<input type="text" name="flimite" id="flimite" class="form-control" placeholder="Fecha limite de vencimiento de la garantia" 
value="{{date('Y-m-d H:i:s') }}" readonly>
              </div>
           </div> 
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
      <div class="form-group"> <br> 
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button> 

<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> 

 <a class="btn btn-info" type="reset" href="{{url('garantia')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                </div> 
            </div> 
        </div> 
   {!!Form::close()!!} 
@endsection