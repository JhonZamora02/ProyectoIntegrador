@extends('layouts.plantilla') 
@section('contenido') 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
            <h3>Editar Detalle de los servicios</h3> 
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
{{Form::open(array('action'=>array('DetalleServicioController@update', $detalles->id_dservicio),'method'=>'patch'))}} 
    <div class="row"> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="iddetalle">Codigo Del Detalle Servicio</label> 
    <input type="number" name="iddetalle" id="iddetalle" class="form-control" value="{{$detalles->id_dservicio}}"> 
            </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="idservicio">Codigo Del Servicio</label> 
                    <input type="text" name="idservicio" id="idservicio" class="form-control" value="{{$detalles->id_servicio}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group"> <br> 
                <label for="idpfactura">Codigo Del Pedido De la Factura</label> 
  <input type="text" name="idpfactura" id="idpfactura" class="form-control" value="{{$detalles->id_pfactura}}"> 
               </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"><br> 
                    <label for="cantidad">Cantidad</label> 
   <input type="text" name="cantidad" id="cantidad" class="form-control" value="{{$detalles->cantidad}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="descuento">Descuento</label> 
   <input type="text" name="descuento" id="descuento" class="form-control" value="{{$detalles->descuento}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span> Actualizar </button> 
              <a class="btn btn-info" type="reset" href="{{url('detalleservicio')}}"><span class="glyphicon glyphicon-home"></span> Regresar </a> 
                     </div> 
                  </div> 
               </div> 
           {!!Form::close()!!} 
@endsection