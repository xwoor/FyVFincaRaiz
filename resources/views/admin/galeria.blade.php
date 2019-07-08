@extends('layouts.admin')

@section('title', 'Galeria')

@section('content')
<div class="container">
    <h1>Galeria</h1><br>
    
                             {{-- MENSAJE ALERT --}}
                           @if(session('mensaje'))
                           <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>{{ session('mensaje')}}</strong> 
                            </div>
                         @endif
                          {{-- FIN MENSAJE ALERT --}}
    
    <div class="row">
      @foreach ($datos as $dato)          
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_1}}">
      </div>
        <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_2}}">
      </div>
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_3}}">
      </div>
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_4}}">
      </div>
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_5}}">
      </div>
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_6}}">
      </div>
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_7}}">
      </div>
      <div class="col-md-3 " style="padding:3px;">
        <img width="100%" src="publicimg_galery/{{$dato->galery_8}}">
      </div>
      @endforeach
    </div>

</div> 
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$dato->id}}">
  </span> Editar 
</button>
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
                    <form action="/galeria/{{$dato->id}}" method="POST"  enctype="multipart/form-data">
                              @csrf
                              @method('PATCH')
                                <div class="form-group col-md-4">
                                  <label for="">Editar</label>
                                <input type="file" name="galery[]"  class="form-control" multiple  required>
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