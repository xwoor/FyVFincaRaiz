@extends('layouts.pages')
@section('title','Construcción')
@include('pages.componentes')  
@section('content')

{{-- SLIDER --}}
<header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('images/construccion-01.png')" data-interval="25000">
              <div class="carousel-caption  d-md-block mb-15">
                <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                  Construcción                       
                </h1>
                <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                  y gerencia de proyectos
                </h1>
                <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                  Construcción y gerencia de proyectos, para la ejecución, el seguimiento, <br>
                  y la administración de recursos, hasta la entrega final del inmueble al cliente.
                </h4>
                <a href="https://api.whatsapp.com/send?phone=573212408008&text=Hola!%20Quiero%20saber%20mas%20de%20ustedes!" target="blank" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                  <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                </a>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/construccion-02.png')" data-interval="16000">
              <div class="carousel-caption  d-md-block mb-15">
                      <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                          Remodelaciones                                                      
                        </h1>
                    <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                        de vivienda 
                    </h1>
                    <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                    	Remodelaciones de vivienda multifamiliar, unifamiliar, comercio y oficinas: <br>
                       pisos, baños, cocinas, pintura, redes eléctricas e hidrosanitarias, cielo rasos,  <br>
                       ventanearía, fachadas, cubiertas
                    </h4>
                    <a href="https://api.whatsapp.com/send?phone=573212408008&text=Hola!%20Quiero%20saber%20mas%20de%20ustedes!" target="blank" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                    <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                    </a>
                </div>
                </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/construccion-01.png')" data-interval="16000">
              <div class="carousel-caption  d-md-block mb-15">
                      <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                          Adecuaciones                                                      
                        </h1>
                    <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                      físicas
                    </h1>
                    <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                      Adecuaciones físicas de obra civil y mobiliario en oficinas abiertas-cerradas y locales comerciales: <br>
                      mampostería drywall y/o superboard, divisiones en vidrio templado, cielos rasos drywall y/o modulares, <br>
                      cableado estructural, instalaciones eléctricas, instalaciones hidrosanitarias, instalaciones de aire <br>
                      acondicionado, puestos de trabajo, salas de junta, muebles de cafetería, salas de lactancia, etc.
                    </h4>
                    <a href="https://api.whatsapp.com/send?phone=573212408008&text=Hola!%20Quiero%20saber%20mas%20de%20ustedes!" target="blank" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                    <img width="250px" src="{{ asset('images/btn_wp.jpg')}}">
                    </a>
                </div>
                </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/construccion-02.png')" data-interval="16000">
                <div class="carousel-caption  d-md-block mb-15">
                        <h1 class="wow fadeInUp txt-red fn-dinn-bl fm text-left" data-wow-delay="0.2s">
                                Mantenimientos                                                      
                          </h1>
                      <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp text-left" data-wow-delay="0.5s">
                            de propiedad horizontal
                      </h1>
                      <h4 class="txt-white fn-dinn mb-10 fm-sm wow fadeInUp text-left" data-wow-delay="0.8s" > <br>
                        Mantenimientos de propiedad horizontal, oficinas, locales comerciales: <br>
                        pintura, cubiertas, tanques, redes hidrosanitarias, instalaciones eléctricas y cableado estructural. <br><br>
                        Servicio de postventas y garantía

                      </h4>
                      <a href="https://api.whatsapp.com/send?phone=573212408008&text=Hola!%20Quiero%20saber%20mas%20de%20ustedes!" target="blank" class="mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
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
      @if ($dato->tipo === 'construccion')
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
        @if ($dato->tipo === 'construccion')
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
                            <img src="upload/{{ $dato->img_1 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_2 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_3 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_4 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_5 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_6 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_7 }}" >
                          </div>
                          <div class="carousel-item carousel-item2">
                            <img src="upload/{{ $dato->img_8 }}" >
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
              </div>
              <div class="col-12 col-lg-5">
                  <div class="line-h">
                      <h4>Descripción:</h4>
                      
                  </div>
                  <p class="line-h">{{ $dato->contenido}}</p>
                  
                      <div class=" mt-4 p-4 wow fadeIn" >
                            <button type="button" class="btn btn-danger mb-4 mb-4" style="background-color:red" data-toggle="modal" data-target="#exampleModalScrollable">
                              Ver Galeria
                            </button>  
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
    
    
    {{-- MODAL  --}}  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Galeria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id="galeria" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#galeria" data-slide-to="0" class="active"></li>
                  <li data-target="#galeria" data-slide-to="1"></li>
                  <li data-target="#galeria" data-slide-to="3"></li>
                  <li data-target="#galeria" data-slide-to="4"></li>
                  <li data-target="#galeria" data-slide-to="5"></li>
                  <li data-target="#galeria" data-slide-to="6"></li>
                  <li data-target="#galeria" data-slide-to="7"></li>
                  <li data-target="#galeria" data-slide-to="8"></li>
                  <li data-target="#galeria" data-slide-to="9"></li>
                  <li data-target="#galeria" data-slide-to="10"></li>
                  <li data-target="#galeria" data-slide-to="11"></li>
                  <li data-target="#galeria" data-slide-to="12"></li>
                </ol>
                <div class="carousel-inner">
                  @foreach ($galerias as $galeria)
                      
           
                  <div class="carousel-item active">
                    <img src="publicimg_galery/{{$galeria->galery_1}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_2}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_3}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_4}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_5}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_6}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_7}}" class="d-block " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="publicimg_galery/{{$galeria->galery_8}}" class="d-block " alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#galeria" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#galeria" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              @endforeach
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
    {{-- FIN MODAL --}}
    @endsection