@extends('layouts.admin')

@section('title', 'Admin')

@section('content')
<div class="container">
    <h1>Home</h1><br>
    
                             {{-- MENSAJE ALERT --}}
                           @if(session('mensaje'))
                           <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>{{ session('mensaje')}}</strong> 
                            </div>
                         @endif
                          {{-- FIN MENSAJE ALERT --}}
    <table class="table table-striped custab mt-4 text-center">
        <thead>
            <tr>
                <th>Img</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Editar</th>
            </tr>
        </thead>
                @foreach ($datos as $dato)
                <tr>
                    <td><img height="30px" class="rounded" src="upload/{{ $dato->img_1}}"></td>
                    <td>{{ $dato->titulo }}</td>
                    <td>{{ $dato->estatus }}</td>
                    <td>{{ $dato->tipo }}</td>
                    <td>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#{{$dato->id}}">
                        </span> Editar 
                    </button>
                    </td>
                </tr>
                @endforeach
    </table>

</div> 

{{-- MODAL --}}
@foreach ($datos as $dato)
     {{-- MODAL --}}
      <div class="modal fade" id="{{$dato->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">{{$dato->titulo}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            {{-- CONTENIDO --}}
                    <div class="row">
                    <form action="/admin/{{$dato->id}}" method="POST">
                              @csrf
                              @method('PATCH')
                                <div class="form-group col-md-4">
                                  <label for="">Titulo del proyecto</label>
                                <input type="text" name="titulo" value="{{$dato->titulo}}" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="">Precio venta</label>
                                  <input type="text" name="precio_venta"  value="{{$dato->precio_venta}}" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="">Precio Arriendo</label>
                                  <input type="text" name="precio_arriendo"  value="{{$dato->precio_arriendo}}" class="form-control" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Contenido</label>
                                    <textarea class="form-control" name="contenido"  rows="4">{{$dato->contenido}}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="">Tipo de Producto</label>
                                  <select class="form-control" name="tipo" >
                                      <option name="inmobiliaria" 
                                       @if ($dato->tipo === 'inmobiliario')
                                          selected @endif >inmobiliario</option>
                                      <option name="construccion" 
                                       @if ($dato->tipo === 'contruccion')
                                          selected @endif >construccion</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="">Estado de Producto</label>
                                <select class="form-control" name="estatus">
                                    <option name="activo" >Activo</option>
                                    <option name="inactivo">Inactivo</option>
                                </select>
                                </div>
                                <h2 class="text-center mt-4">Requisitos</h2>
            
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 1</label>
                                        <input type="text" name="requisito_1" value={{$dato->requisito_1}}  class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 2</label>
                                        <input type="text" name="requisito_2" value={{$dato->requisito_2}}  class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 3</label>
                                        <input type="text" name="requisito_3" value={{$dato->requisito_3}}  class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 4</label>
                                        <input type="text" name="requisito_4" value={{$dato->requisito_4}}  class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 5</label>
                                        <input type="text" name="requisito_5" value={{$dato->requisito_5}}  class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 6</label>
                                        <input type="text" name="requisito_6" value={{$dato->requisito_6}}  class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="">Requisito 7</label>
                                        <input type="text" name="requisito_7" value={{$dato->requisito_7}}  class="form-control" required>
                                </div>
                                
                            </div>
                                <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                            </form>
                        </div>
            {{-- CONTENIDO --}}
            </div>
          </div>
        </div>
      </div>
     {{-- MODAL --}}
@endforeach
    @endsection