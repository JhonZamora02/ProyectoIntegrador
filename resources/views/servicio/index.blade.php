@extends('layouts.plantilla') 
@section('contenido') 
<div class="row"> 
        <div class="col-md-8 col-xs-12"> 
            @include('servicio.search') 
        </div> 
        <div class="col-md-2"> 
            <a href="persona/create" class="pull-right"> 
                <button class="btn btn-success">Crear Servicio</button> 
            </a> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-md-12 col-xs-12"> 
            <div class="table-responsive"> 
                <table class="table table-striped table-hover"> 
                    <thead> 
                        <th>Codigo Servicio</th> 
                        <th>Codigo Garantia</th> 
                        <th>Codigo Cita</th> 
                        <th>Tipo Servicio</th> 
                        <th width="180">Opciones</th> 
                    </thead> 
                    <tbody>
                        @foreach($servicios as $servicio) 
                        <tr> 
            <td>{{ $servicio->cod_servicio }}</td> 
            <td>{{ $servicio->cod_garatia }}</td> 
            <td>{{ $servicio->cod_cita }}</td> 
            <td>{{ $servicio->tpo_servicio}}</td> 
            <td> 
           <a href="{{URL::action('ServicioController@edit',$servicio->cod_servicio)}}"><button class="btn btn-primary">Actualizar</button></a>
           <a href="" data-target="#modal-delete-{{$servicio->cod_servicio}}" data-toggle="modal"> 
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