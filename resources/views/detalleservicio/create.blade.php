@extends('layouts.plantilla') 
@section('contenido') 
 <div class="row"> 
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
     <h3>Crear Detalle Servicio</h3> 
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
 {!!Form::open(array('url'=>'detalleservicio','method'=>'POST','autocomplete'=>'off'))!!} 
       {{Form::token()}} 
       <div class="row"> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <div class="form-group"> 
             <br><label for="iddetalle">Codigo Del Detalle Servicio</label> 
<input type="number" name="iddetalle" id="iddetalle" class="form-control" placeholder= "Digite el código del detalle del servicio"> 
            </div> </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <!--<div class="form-group"> 
                    <br> 
                 <label for="idservicio">Codigo Del Servicio</label> 
<input type="text" name="idservicio" id="idservicio" class="form-control" placeholder="Digite el código del servicio al que hace referencia"> 
               </div>-->
           <div class="form-group">
           <br>
              <label for="Role">Codigo Del Servicio</label>
                 <select name="servicio_id" id="servicio_id" class="form-control selectpicker" data-livesearch="true" required>
                     <option value="" disabled selected>Servicio:</option>
                      @foreach($servicio as $servicio)
                      <option value="{{$servicio->id_servicio}}">{{ $servicio->tipo_servicios }}</option>
                    @endforeach
                 </select>
          </div></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
                   <br><label for="idpfactura">Codigo Del Pedido De la Factura</label> 
<input type="text" name="idpfactura" id="idpfactura" class="form-control" placeholder="Digite el código del pedido factura al que hace referencia"> 
               </div> 
           </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group"> 
               <br> <label for="cantidad">Cantidad</label> 
<input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Digite la cantidad de servicios"> 
           </div> </div> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
               <div class="form-group">
               <br> <label for="descuento">Descuento</label> 
<input type="text" name="descuento" id="descuento" class="form-control" placeholder="Digite el descuento del servicio"> 
               </div> 
           </div> 
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
      <div class="form-group"> <br> 
<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button> 

<button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button> 

 <a class="btn btn-info" type="reset" href="{{url('detalleservicio')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                </div> 
            </div> 
        </div> 
   {!!Form::close()!!} 
@endsection