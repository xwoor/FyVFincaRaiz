@extends('layouts.pages')
@section('title','Construcción')
    
@section('content')

{{-- SLIDER --}}
<header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('images/construccion-01.png')">
              <div class="carousel-caption  d-md-block mb-15">
                  <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                        Remodelaciones                        
                    </h1>
                <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                        de vivienda 
                </h1>
                <h3 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                    Multifamiliar, unifamiliar, comercio y oficinas: pisos, baños, cocinas, pintura, redes <br>
                    eléctricas e hidrosaniatrias, cielo rasos, ventaneria, fachadas, cubiertas. <br> <br>

                    Adecuaciones físicas de obra civil y mobiliario en oficinas abiertas-cerradas y locales <br>
                    comerciales: mampostería drywall y/o superboard, divisiones en vidrio templado, <br>
                    cielos rasos drywall y/o modulares, cableado estructural, instalaciones eléctricas, <br>
                    instalaciones hidrosanitarias, instalaciones de aire acondicionado, puestos de trabajo, <br>
                    salas de junta, muebles de cafetería,salas de lactancia, etc.
                </h3>
                <a href="#mision" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                </a>
            </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/construccion-02.png')">
                <div class="carousel-caption  d-md-block mb-15">
                        <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                                Construcción <br>
                                y gerencia                                                        
                          </h1>
                      <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                            de proyectos
                      </h1>
                      <h3 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                        el seguimiento, administración de recursos, hasta la entrega <br>
                        final del inmueble al cliente.
                      </h3>
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