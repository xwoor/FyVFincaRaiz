@extends('layouts.pages')
@section('title','Arquitectura')
    
@section('content')
{{-- SLIDER --}}
<header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('images/inmobiliaria_01.png')">
              <div class="carousel-caption  d-md-block mb-15">
                  <h1 class="wow fadeInUp txt-white fn-dinn fm text-left" data-wow-delay="0.2s">
                        Diseño <br>
                        arquitectónico                        
                    </h1>
                <h1 class="display-4 txt-red fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                        de innovación
                </h1>
                <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                  estamos a la vanguardia teniendo en cuenta las ultimas <br>
                  tendencias, de proyectos multifamiliares, unifamiliares, y <br>
                  comerciales (oficinas y locales comerciales).
                </h4>
                <a href="#mision" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                </a>
            </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/inmobiliaria_02.png')">
                <div class="carousel-caption  d-md-block mb-15">
                        <h1 class="wow fadeInUp txt-white fn-dinn fm text-left" data-wow-delay="0.2s">
                            Asesoria                       
                          </h1>
                      <h1 class="display-4 txt-red fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                            100% integral
                      </h1>
                      <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                        Asesoría en todo tipo de acabados y materiales constructivos,  <br>
                        para la personalización de su inmueble: especificaciones de <br>
                        construcción y de acabados.
                      </h4>
                      <a href="#mision" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                      <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                      </a>
                  </div>
                  </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/inmobiliaria_03.png')">
                <div class="carousel-caption  d-md-block mb-15">
                        <h1 class="wow fadeInUp txt-white fn-dinn fm text-left" data-wow-delay="0.2s">
                            Diligenciamos
                          </h1>
                      <h1 class="display-4 txt-red fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                            Trámites <br>
                            de Construcción
                      </h1>
                      <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                        Tramites de licencia de construcción y urbanismo, tramites  <br>
                        de licencia de excavación, PMT (plan de manejo de trafico), <br>
                        tramites ante entidades publicas.

                        <br>
                        Elaboración de presupuestos y control de programación, <br>
                        basados en los diseños y especificaciones dadas.
                      </h4>
                      <a href="#mision" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                      <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                      </a>
                  </div>
                  </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </header>
    {{-- FIN SLIDER --}}
    

@endsection