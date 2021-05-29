@extends('layouts.plantilla') 
@section('contenido') 
<div class="row"> 
        <div class="col-md-8 col-xs-12"> 
            @include('detalleservicio.search') 
        </div> 
        <div class="col-md-2"> 
            <a href="detalleservicio/create" class="pull-right"> 
                <button class="btn btn-success">Crear Detalle Del Servicio</button> 
            </a> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-md-12 col-xs-12"> 
            <div class="table-responsive"> 
                <table class="table table-striped table-hover"> 
                    <thead> 
                        <th>Id Detalle Servicio</th> 
                        <th>Id Servicio</th> 
                        <th>Id Pedido Factura</th> 
                        <th>Cantidad</th> 
                        <th>Descuento</th> 
                        <th width="180">Opciones</th> 
                    </thead> 
                    <tbody>
                        @foreach($detalles as $detalle) 
                        <tr> 
            <td>{{ $detalle->id_dservicio }}</td> 
            <td>{{ $detalle->servicios->id_servicio }}</td> 
            <td>{{ $detalle->pedido_factura_id_pedido_fact }}</td> 
            <td>{{ $detalle->cantidad }}</td> 
            <td>{{ $detalle->descuento }}</td> 
            <td> 
           <a href="{{URL::action('DetalleServicioController@edit',$detalle->id_dservicio)}}"><button class="btn btn-primary">Actualizar</button></a>
           <a href="" data-target="#modal-delete-{{$detalle->id_dservicio}}" data-toggle="modal"> 
              <button class="btn btn-danger">Eliminar</button> 
              </a>
                   </td> 
                      </tr>
                      @include('detalleservicio.modal')
                        @endforeach 
                      </tbody> 
                   </table> 
              </div> 
        {{$detalles->links()}} 
           </div> 
       </div> 

@endsection