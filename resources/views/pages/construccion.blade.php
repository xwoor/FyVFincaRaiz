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
            <div class="carousel-item active" style="background-image: url('images/construccion-01.png')" data-interval="25000">
              <div class="carousel-caption  d-md-block mb-15">
                  <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                        Remodelaciones                        
                    </h1>
                <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                        de vivienda 
                </h1>
                <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                    Remodelaciones de vivienda multifamiliar, unifamiliar, comercio y oficinas:
                    pisos, baños, cocinas, pintura, redes eléctricas e hidrosanitarias, cielo rasos, ventanearía, fachadas, cubiertas<br> 

                    Adecuaciones físicas de obra civil y mobiliario en oficinas abiertas-cerradas y locales 
                    comerciales: mampostería drywall y/o superboard, divisiones en vidrio templado,
                    cielos rasos drywall y/o modulares, cableado estructural, instalaciones eléctricas,
                    instalaciones hidrosanitarias, instalaciones de aire acondicionado, puestos de trabajo,
                    salas de junta, muebles de cafetería,salas de lactancia, etc.
                    Mantenimientos de propiedad horizontal, oficinas, locales comerciales:
                    pintura, cubiertas, tanques, redes hidrosanitarias, instalaciones eléctricas y
                    cableado estructural.
                    Servicio de postventas y garantía
                </h4>
                <a href="#mision" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                </a>
            </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/construccion-02.png')" data-interval="16000">
                <div class="carousel-caption  d-md-block mb-15">
                        <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                                Construcción <br>
                                y gerencia                                                        
                          </h1>
                      <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                            de proyectos
                      </h1>
                      <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                        para la ejecución, el seguimiento, y la administración de recursos, <br>
                         hasta la entrega final del inmueble al cliente.
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

    {{-- CONTRUCCION --}}
    <div class="bg_im">
            <div class="container ">
                <div class="row mt-4 mb-4">
                    @php $contador = 1 @endphp  
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        
      @foreach ($datos as $dato)
      @if ($dato->estatus === 'Activo')
      @if ($dato->tipo === 'contruccion')
        <li class="nav-item "> 
          <a class="nav-link " id="info_{{$dato->id}}-tab" data-toggle="tab" href="#info_{{$dato->id}}" role="tab" aria-controls="{{$dato->id}}" aria-selected="true">{{$dato->titulo}}</a>
        </li>
        @endif
        @endif
        @endforeach 
    </ul>
    
      <div class="tab-content" id="myTabContent">
        @foreach ($datos as $dato)
        @if ($dato->estatus === 'Activo')
        @if ($dato->tipo === 'contruccion')
        <div class="tab-pane fade  @if ($contador == 1) show active @endif" id="info_{{ $dato->id}}" role="tabpanel" aria-labelledby="{{ $dato->id}}-tab">
          {{-- CONTENIDO  --}}
          @php $contador = $contador + 1 @endphp
          <div class="row ">
              <div class="col-12 col-lg-7 ">
              <h3>{{$dato->titulo}}</h3>
                  {{-- CARROUSERL --}}
                  <div class="bd-example">
                      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item carousel-item2 active">
                            <img src="upload/{{$dato->img_1}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_2}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_3}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_4}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_5}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_6}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_7}}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{$dato->img_8}}" >
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  {{-- FIN CARROUSEL --}}
    
                  <div class="">
                  <img src="{{ asset('images/icons_01.png')}}" alt="">
                  
                  </div>
              </div>
              <div class="col-12 col-lg-5">
                  <div class="line-h">
                      <h4>Precio de venta:</h4>
                      <h2>{{ $dato->precio_venta}}</h2>
                      <h4>Precio de arriendo</h4>
                      <h2>{{ $dato->precio_arriendo}}</h2>
                  </div>
                  <p>adminsitracion incluida</p>
                  <p class="line-h">{{ $dato->contenido}}</p>
                  <h4>Requisitos de arriendo</h4>
                  <p class="line-h">1. {{ $dato->requisito_1}} <br>
                      2. {{ $dato->requisito_2}} <br>
                      3. {{ $dato->requisito_3}} <br>
                      4. {{ $dato->requisito_4}} <br>
                      5. {{ $dato->requisito_5}} <br>
                      6. {{ $dato->requisito_6}} <br>
                      7. {{ $dato->requisito_7}} </p>
                      <div class="row mt-4 p-4 wow fadeIn" data-wow-delay="1s">
                          <a href="#" target="blank" class="mb-4 mb-4 ">
                              <button>
                                  <img class="img-slide" src=" {{asset('images/btn_wp.jpg')}} ">
                              </button>
                          </a>
                      </div>
              </div>
      
          </div>
          {{-- FIN CONTENIDO --}}
        </div>
        @endif
        @endif
        @endforeach
        
        
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    @endsection