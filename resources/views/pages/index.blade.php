@extends('layouts.pages')
@section('title','Home')
    
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
        <div class="carousel-item active" style="background-image: url('images/home_01.jpg')">
          <div class="carousel-caption  d-md-block mb-15">
              <h3 class="wow fadeInUp txt-white fn-dinn fm-sm" data-wow-delay="0.2s">
                  Crecemos contigo gracias
                </h3>
            <h1 class="display-4 txt-white fn-dinn-bl fm wow fadeInUp" data-wow-delay="0.5s">
                Trabajo en equipo,
            </h1>
            <h1 class="txt-red fn-dinn-bl mb-10 fm wow fadeInUp" data-wow-delay="0.8s" >
                la calidad y enfoque
            </h1>
            <a href="#mision" class="btn-red mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">conoce más</a>
        </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/home_02.jpg')">
            <div class="carousel-caption  d-md-block mb-15">
                    <h3 class="wow fadeInUp txt-white fn-dinn fm-sm" data-wow-delay="0.2s">
                            Te ofrecemos
                      </h3>
                  <h1 class="display-4 txt-red fn-dinn-bl fm wow fadeInUp" data-wow-delay="0.5s">
                        Tecnología, dedicación
                  </h1>
                  <h1 class="txt-white fn-dinn-bl mb-10 fm wow fadeInUp" data-wow-delay="0.8s" >
                        y responsabilidad
                  </h1>
                  <a href="#mision" class="btn-red mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">
                      conoce más</a>
              </div>
              </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/home_03.jpg')">
            <div class="carousel-caption  d-md-block mb-15">
                    <h3 class="wow fadeInUp txt-white fn-dinn fm-sm" data-wow-delay="0.2s">
                            Aportamos
                      </h3>
                  <h1 class="display-4 txt-red fn-dinn-bl fm wow fadeInUp" data-wow-delay="0.5s">
                        Ideas innovadoras
                  </h1>
                  <h1 class="txt-white fn-dinn-bl mb-10 fm wow fadeInUp" data-wow-delay="0.8s" >
                        que permiten el crecimiento <br>de la sociedad.
                  </h1>
                  <a href="#mision" class="btn-red mt-4 fn-dinn wow fadeInUp" data-wow-delay="1.1s">conoce más</a>
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

{{-- SECCION --}}
<div class="bg">
    <div class="row justify-content-md-center">
        <div class="col-12 mt-4">
            <h2 class="txt-white text-center wow slideInUp mt-4" data-wow-delay="0.3s">Somos una compañia de 
                <br> arquitectura 100% colombiana</h2>
        <div class="col-12  offset-lg-3 col-lg-6 mb-4">
            <p class="txt-white text-justify mt-4 line-h wow zoomIn">
                Especializada en el sector de bienes raíces y construcción, somos una empresa que se desarrolla, se caracteriza y crece gracias al trabajo en equipo, la calidad, el enfoque hacia las últimas tendencias arquitectónicas y la tecnología, la dedicación por hacer bien las cosas, y la responsabilidad como empresa, y con nuestros clientes.  Nuestro equipo de trabajo es especialista en estos sectores y nuestro objetivo siempre es satisfacer las necesidades de nuestros clientes: comercialización, venta y arriendo de inmuebles, adecuaciones físicas oficinas-vivienda y remodelaciones, construcción y ejecución de proyectos, interventorías, asesorías de inversión en finca raíz nacional y en USA, administración de propiedad horizontal y gerencia de proyectos.
            </p>
            <p class="txt-white text-justify mt-4 line-h mb-4 wow zoomIn">
                Nuestra atención es personalizada, adelantándonos a las necesidades de nuestra metrópolis y de nuestros clientes, siempre ofreciendo eficacia, calidad, confianza, agilidad, y seguridad, apalancados en nuestra experiencia y nuestroexcelente servicio al cliente. Tenemos experiencia en diseño y construcción en mas de 40.000m2 en multifamiliares de estratos medios, conusos mixtos.
            </p><br>
        </div>
        </div>
    </div>
</div>
{{-- FIN SECCION --}}
{{-- SECTION 2 --}}
<div class="container">
    <div class="row justify-content-md-center" id="mision">
            <div class="col-12 col-lg-6 mt-4" style="border-right:2px solid gray">
                <div  style="display:flex">
                        <div class="col-10 col-lg-9">
                         <h3 class="txt-white text-right txt-red  wow slideInLeft mt-4" >MISIÓN</h3>
                        <p class="text-right mt-2  wow fadeInLeft fz-10 fn-myriad" data-wow-delay="0.5s">
                            Diseñar, construir y comercializar prtoyectos de obra civil e inmobiliarios, basados en las últimas tendencias constructivas, con altos estándares de calidad y eficiencia requeridas, y según las necesidades de nuestros clientes, utilizando nuestros valores corporativos que son la excelencia, el respeto, la eficacia, y un altísimo servicio al cliente.
                        </p>
                    </div>
                    <div class="col-2 col-lg-3  mt-4 p-4 wow fadeIn" data-wow-delay="1s">
                        <img width="100%" src=" {{asset('images/icon_01.png')}} ">
                    </div>
                </div>
            </div>
             <div class="col-12 col-lg-6 mt-4 mb-4">
                    <div  style="display:flex">
                        <div class="col-2 col-lg-3 mt-4 p-4 wow fadeIn" data-wow-delay="1s">
                                <img width="100%" src=" {{asset('images/icon_02.png')}} ">
                        </div>
                        <div class="col-10 col-lg-9">
                            <h3 class="txt-white text-left txt-red mt-4 wow fadeInRight">VISIÓN</h3>
                                <p class="text-left mt-2 wow fadeInRight fz-10 fn-myriad" data-wow-delay="0.5s">
                                    Crecer a nivel metrpolitano siendo sólidos y confiables en el mercado inmobiliario y constructor, basado en nuestro crecimiento corporativo, en la innovación, en la tecnología, eficiencia, altos estándares de calidad y adelantándonos siempre a las necesidades de nuestros clientes, obteniendo un reconocimiento a nivel metropolitano en el 2022 por nuestra solidez y dedicación como compañía.
                                </p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-4 p-4 wow fadeIn" data-wow-delay="1s">
            <a href="#" target="blank" class="mb-4 mb-4 ">
                <button>
                    <img class="img-slide" src=" {{asset('images/btn_wp.jpg')}} ">
                </button>
            </a>
        </div>
</div>
{{-- FIN SECTION 2 --}}
@endsection