@extends('layouts.pages')
@section('title','Inmobiliaria')
   
@section('content')
<div class="bg_im">
        <div class="container ">
                <div class="row ">
                    <div class="col-12 col-lg-7 mt-200">
                        <h3>Apt Magenta:</h3>
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
                                  <img src="{{asset('images/upload/magenta_01.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_02.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_03.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_04.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_05.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_06.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_07.png')}}" >
                                </div>
                                <div class="carousel-item carousel-item2">
                                  <img src="{{asset('images/upload/magenta_08.png')}}" >
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
                    <div class="col-12 col-lg-5 mt-200">
                        <div class="line-h">
                            <h4>Precio de venta:</h4>
                            <h2>380'000.000</h2>
                            <h4>Precio de arriendo</h4>
                            <h2>1'900.000</h2>
                        </div>
                        <p>adminsitracion incluida</p>
                        <p class="line-h">zona de ropas epsacio para lavadora, un parqueadero privado, zonas infantiles,terraza con BBQ  y gimansio. Lugares cercanos: C.C Titán Plaza, Farmatodo , Olimpica , Bodytech , Avenida Boyacá, Av. Calle 80, Transmilenio x cll 26.
                        </p>
                        <h4>Requisitos de arriendo</h4>
                        <p class="line-h">1. Formato de solicitud de arrendamiento diligenciado. <br>
                            2. Dos fiadores, al menos uno con finca raíz. <br>
                            3. Dos Referencias Personales. <br>
                            4. Si es empleado certificado de ingresos y los tres últimos desprendibles de nomina, si es independiente Extractos
                            bancarios de los últimos tres meses y declaración de renta si declara. <br>
                            5. Contrato de arrendamiento mínimo a 6 meses: Firmado y autenticado ante notaria. <br>
                            6. Depòsito de un canon de arrendamiento, como garantìa, el cual se reembolsara, cuando el inmueble sea devuelto. <br>
                            7. En las misma condiciones de entrega.</p>
                            <div class="row mt-4 p-4 wow fadeIn" data-wow-delay="1s">
                                <a href="#" target="blank" class="mb-4 mb-4 ">
                                    <button>
                                        <img class="img-slide" src=" {{asset('images/btn_wp.jpg')}} ">
                                    </button>
                                </a>
                            </div>
                    </div>
            
                </div>
        </div>
</div>

@endsection