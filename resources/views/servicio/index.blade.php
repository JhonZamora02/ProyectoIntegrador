@extends('layouts.plantilla') 
@section('contenido') 
<div class="row"> 
        <div class="col-md-8 col-xs-12"> 
            @include('servicio.search') 
        </div> 
        <div class="col-md-2"> 
            <a href="servicio/create" class="pull-right"> 
                <button class="btn btn-success">Crear Servicio</button> 
            </a> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-md-12 col-xs-12"> 
            <div class="table-responsive"> 
                <table class="table table-striped table-hover"> 
                    <thead> 
                        <th>Id Servicio</th> 
                        <th>Id Garantia</th> 
                        <th>Id Empleado</th> 
                        <th>Id Vehiculo</th> 
                        <th>Id Cita</th> 
                        <th>Precio</th> 
                        <th>Comentario</th> 
                        <th>Tipo Servicio</th> 
                        <th width="180">Opciones</th> 
                    </thead> 
                    <tbody>
                        @foreach($servicios as $servicio) 
                        <tr> 
            <td>{{ $servicio->id_servicio }}</td> 
            <td>{{ $servicio->garantia_id_garantia }}</td>
            <td>{{ $servicio->empleado_id_empleado }}</td>
            <td>{{ $servicio->vehiculo_id_vehiculo }}</td>
            <td>{{ $servicio->cita_id_cita }}</td>
            <td>{{ $servicio->precio }}</td> 
            <td>{{ $servicio->comentarios }}</td> 
            <td>{{ $servicio->tipo_servicios }}</td> 
            <td> 
           <a href="{{URL::action('ServicioController@edit',$servicio->id_servicio)}}"><button class="btn btn-primary">Actualizar</button></a>
           <a href="" data-target="#modal-delete-{{$servicio->id_servicio}}" data-toggle="modal"> 
              <button class="btn btn-danger">Eliminar</button> 
              </a>
                   </td> 
                      </tr>
                      @include('servicio.modal')
                        @endforeach 
                      </tbody> 
                   </table> 
              </div> 
        {{$servicios->links()}} 
           </div> 
       </div> 

@endsection