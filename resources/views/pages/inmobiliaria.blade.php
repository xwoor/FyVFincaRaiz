@extends('layouts.pages')
@section('title','Inmobiliaria')
@include('pages.componentes')
@section('content')


<div class="bg_im">
        <div class="container ">
            <div class="row mt-110 mb-4">
                @php $contador = 1 @endphp  

<ul class="nav nav-tabs" id="myTab" role="tablist">
    
  @foreach ($datos as $dato)
  @if ($dato->estatus === 'Activo')
  @if ($dato->tipo === 'inmobiliario')
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
    @if ($dato->tipo === 'inmobiliario')
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
              <h4>Descripción detallada</h4>
              <p class="line-h">{{ $dato->contenido}}</p>
              <h4>Descripción</h4>
              <p class="line-h">- {{ $dato->requisito_1}} <br>
                  - {{ $dato->requisito_2}} <br>
                  - {{ $dato->requisito_3}} <br>
                  - {{ $dato->requisito_4}} <br>
                  - {{ $dato->requisito_5}} <br>
                  - {{ $dato->requisito_6}} <br>
                  - {{ $dato->requisito_7}} </p>
                  <div class="row mt-4 p-4 wow fadeIn" data-wow-delay="1s">
                      <a href="https://api.whatsapp.com/send?phone=573212408008&text=Hola!%20Quiero%20saber%20mas%20de%20ustedes!" target="blank" class="mb-4 mb-4 ">
                          <button>
                              <img class="img-slide" src=" {{asset('images/icons_02.png')}} ">
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