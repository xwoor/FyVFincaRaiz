@extends('layouts.pages')
@section('title','Contacto')
@include('pages.componentes')
@section('content')
<div class="container bg_im">
    <div class="row ">
        <div class="col-12 col-lg-6 mt-110 -4 mb-4">
        <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.167761084048!2d-74.05865788552272!3d4.7409190965567465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f850c835a4ce9%3A0xddeb309259a006c9!2sCl.+159+%2354-81%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1562458731486!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-12 col-lg-6 mt-110 p-4 mb-4">
 <!--Form with header-->
 
 <form action="/mail" method="POST" class="form">
     @method('post')
     @csrf
     <div class="card  ">
         <div class="card-header  p-0">
             <div class="bg-danger text-white text-center py-2">
                 <h3 class="txt-white"><i class="fa fa-envelope"></i> Contáctanos</h3>
                 <p class="m-0 txt-white">Con gusto te ayudaremos</p>
                         {{-- MENSAJE ALERT --}}
                         @if(session('mensaje'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ session('mensaje')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                         {{-- FIN MENSAJE ALERT --}}
            </div>
        </div>
        <div class="card-body p-3">

            <!--Body-->
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user text-danger"></i></div>
                    </div>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope text-danger"></i></div>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="ejemplo@gmail.com" required>
                </div>
            </div>
            <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-phone text-danger"></i></div>
                        </div>
                        <input type="text" class="form-control" name="cel" placeholder="320 123 4657" required>
                    </div>
                </div>
            <div class="form-group">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-comment text-danger"></i></div>
                    </div>
                    <textarea class="form-control" name="mensaje" placeholder="Envianos tu Mensaje" required></textarea>
                </div>
            </div>

            <div class="text-center">
                <input type="submit" value="Enviar" class="btn btn-danger btn-block rounded-0 py-2">
            </div>
        </div>

    </div>
</form>
<!--Form with header-->
        </div>
    </div>
</div>

@endsection