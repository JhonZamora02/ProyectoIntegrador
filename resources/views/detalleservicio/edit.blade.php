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
                    <label for="id_dservicio">Codigo Del Detalle Servicio</label> 
    <input type="number" name="id_dservicio" id="id_dservicio" class="form-control" value="{{$detalles->id_dservicio}}"> 
            </div> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
                <div class="form-group"> <br> 
                    <label for="servicio_id_servicio">Codigo Del Servicio</label> 
                    <input type="text" name="servicio_id_servicio" id="servicio_id_servicio" class="form-control" value="{{$detalles->servicio_id_servicio}}"> 
                </div> 
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group"> <br> 
                <label for="pedido_factura_id_pedido_fact">Codigo Del Pedido De la Factura</label> 
  <input type="text" name="pedido_factura_id_pedido_fact" id="pedido_factura_id_pedido_fact" class="form-control" value="{{$detalles->pedido_factura_id_pedido_fact }}"> 
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