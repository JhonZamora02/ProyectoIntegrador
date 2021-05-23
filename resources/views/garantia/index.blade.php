@extends('layouts.plantilla') 
@section('contenido') 
<div class="row"> 
        <div class="col-md-8 col-xs-12"> 
            @include('garantia.search') 
        </div> 
        <div class="col-md-2"> 
            <a href="garantia/create" class="pull-right"> 
                <button class="btn btn-success">Crear Garantia</button> 
            </a> 
        </div> 
    </div> 
    <div class="row"> 
        <div class="col-md-12 col-xs-12"> 
            <div class="table-responsive"> 
                <table class="table table-striped table-hover"> 
                    <thead> 
                        <th>Id Garantia</th> 
                        <th>Fecha Garantia</th> 
                        <th>Comentarios</th> 
                        <th>Condicion</th> 
                        <th>Fecha Limite</th> 
                        <th width="180">Opciones</th> 
                    </thead> 
                    <tbody>
                        @foreach($garantias as $garantia) 
                        <tr> 
            <td>{{ $garantia->id_garantia }}</td> 
            <td>{{ $garantia->fecha_garantia }}</td> 
            <td>{{ $garantia->comentarios }}</td> 
            <td>{{ $garantia->condicion }}</td> 
            <td>{{ $garantia->fecha_limite }}</td> 
            <td> 
           <a href="{{URL::action('GarantiaController@edit',$garantia->id_garantia)}}"><button class="btn btn-primary">Actualizar</button></a>
           <a href="" data-target="#modal-delete-{{$garantia->id_garantia}}" data-toggle="modal"> 
              <button class="btn btn-danger">Eliminar</button> 
              </a>
                   </td> 
                      </tr>
                      @include('garantia.modal')
                        @endforeach 
                      </tbody> 
                   </table> 
              </div> 
        {{$garantias->links()}} 
           </div> 
       </div> 

@endsection