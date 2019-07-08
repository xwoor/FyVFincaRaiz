@extends('layouts.admin')

@section('title', 'Agregar Informacion')

@section('content')
<div class="container">
    <div class="row">
        <h1>Informacion de la Pagina</h1><br>
                                   {{-- MENSAJE ALERT --}}
                                   @if(session('mensaje'))
                                   <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <strong>{{ session('mensaje')}}</strong> 
                                    </div>
                                 @endif
                                  {{-- FIN MENSAJE ALERT --}}
    </div>
    @foreach ($info as $dato)
    <div class="row">
            <div class=""><h3 >Dirección: {{$dato->direccion}}</h3> </div>
            <div class=""><h3 >Celular: {{$dato->celular}}</h3> </div>
            <div class=""><h3 >Ubicacion: {{$dato->mapa}} </h3> </div>
    </div>
    <div class="row">
            <div class=""><h3 >Facebook: {{$dato->link_fb}}</h3> </div>
            <div class=""><h3 >Instagram: {{$dato->link_ig}}</h3> </div>
            <div class=""><h3 >Twitter: {{$dato->link_tw}}</h3> </div>
    </div>
    <div class="row">     
            <div class=""><h3 >Whatsapp: {{$dato->link_wt}}</h3> </div>
            <div class=""><h3 >Youtube: {{$dato->link_yt}}</h3> </div>
            <div class=""><h3 >PSE: {{$dato->link_pse}}</h3> </div>
        </div> 
    <div class="row">
            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#{{$dato->id}}">
                </span> Editar Datos 
            </button>
    </div>
</div>  

{{-- MODAL --}}
@foreach ($info as $dato)
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
                                    <label for="">Dirección</label>
                                  <input type="text" name="direccion" value="{{$dato->direccion}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">celular</label>
                                  <input type="text" name="celular" value="{{$dato->celular}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">Ubicación</label>
                                  <input type="text" name="mapa" value="{{$dato->mapa}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">Facebook</label>
                                  <input type="text" name="link_fb" value="{{$dato->link_fb}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">Instagram</label>
                                  <input type="text" name="link_ig" value="{{$dato->link_ig}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">Twitter</label>
                                  <input type="text" name="link_tw" value="{{$dato->link_tw}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">Whatsapp</label>
                                  <input type="text" name="link_wt" value="{{$dato->link_wt}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">Youtube</label>
                                  <input type="text" name="link_yt" value="{{$dato->link_yt}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                    <label for="">PSE</label>
                                  <input type="text" name="link_pse" value="{{$dato->link_pse}}" class="form-control" required>
                            </div>

                            </div>
                                <button type="submit" class="btn btn-primary">Actualizar Información</button>
                            </form>
                        </div>
            {{-- CONTENIDO --}}
            </div>
          </div>
        </div>
      </div>
     {{-- MODAL --}}
@endforeach
    @endforeach
</div> 
    @endsection