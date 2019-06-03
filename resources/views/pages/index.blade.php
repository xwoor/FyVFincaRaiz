@extends('layouts.pages')
@section('title','Home')
    
@section('content')
{{-- SLIDER --}}
	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">				
            <!-- Slide -->
            <div class="slide">
                <div class="background_image" style="background-image:url(images/home_01.jpg)"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content text-center  ">
                                    <div class="booking_form_container lh-15">
                                        <h3 class="txt-white wow fadeInUp" data-wow-delay="0.3s">
                                            Crecemos contigo
                                        </h3>
                                        <h1 class="txt-white wow fadeInUp" data-wow-delay="0.5s">
                                            Trabajo en equipo,
                                        </h1>                                      
                                        <h1 class="txt-red wow fadeInUp" data-wow-delay="0.8s">
                                            la calidad y enfoque
                                        </h1>
                                    </div>
                                    <button class="btn-red  wow fadeInUp" data-wow-delay="1.3s">
                                        conoce más
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<!-- Slide -->
				<div class="slide">
                    <div class="background_image" style="background-image:url(images/home_02.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="booking_form_container lh-15">
                                            <h3 class="txt-white wow fadeInUp" data-wow-delay="0.3s">
                                                Te ofrecemos</h3>
                                            <h1 class="txt-red wow fadeInUp" data-wow-delay="0.5s">
                                                Tecnología, dedicación</h1>                                   
                                            <h1 class="txt-white  wow fadeInUp" data-wow-delay="0.8s">
                                                y responsabilidad.</h1>
                                        </div>
                                        <button class="btn-red  wow fadeInUp" data-wow-delay="1.3s">
                                            conoce más
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- Slide -->
				<div class="slide">
                    <div class="background_image" style="background-image:url(images/home_03.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="booking_form_container lh-15">
                                            <h3 class="txt-white wow fadeInUp" data-wow-delay="0.3s">
                                                Aportamos</h3>
                                            <h1 class="txt-red wow fadeInUp" data-wow-delay="0.5s">
                                                Ideas innovadoras</h1>                 
                                            <h1 class="txt-white  wow fadeInUp" data-wow-delay="0.8s">
                                                que permiten el crecimiento <br>de la sociedad.</h1>
                                        </div>
                                        <button class="btn-red  wow fadeInUp" data-wow-delay="1.3s">
                                            conoce más
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			
			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
						<li class="home_slider_custom_dot active"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div> 
{{-- FIN SLIDER --}}

{{-- SECCION --}}
<div class="bg">
    <div class="row justify-content-md-center">
        <div class="col-12 mt-4">
            <h2 class="txt-white text-center wow slideInDown mt-4" data-wow-delay="0.3s">Somos una compañia de 
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
<div class="row justify-content-md-center">
        <div class="col-12 col-lg-5 mt-4" style="border-right:2px solid gray">
            <div  style="display:flex">
                    <div class="col-12 col-lg-9">
                     <h3 class="txt-white text-right txt-red line-h wow slideInLeft mt-4" >MISIÓN</h3>
                    <p class="text-right mt-4 line-h wow fadeInLeft" data-wow-delay="0.5s">
                        Diseñar, construir y comercializar prtoyectos de obra civil e inmobiliarios, basados en las últimas tendencias constructivas, con altos estándares de calidad y eficiencia requeridas, y según las necesidades de nuestros clientes, utilizando nuestros valores corporativos que son la excelencia, el respeto, la eficacia, y un altísimo servicio al cliente.
                    </p>
                </div>
                <div class="col-0 col-lg-3  mt-4 wow fadeIn" data-wow-delay="1s">
                    <img width="100%" src=" {{asset('images/icon_01.png')}} ">
                </div>
            </div>
        </div>
         <div class="col-12 col-lg-5 mt-4 mb-4">
                <div  style="display:flex">
                    <div class="col-0 col-lg-3 mt-4 wow fadeIn" data-wow-delay="1s">
                            <img width="100%" src=" {{asset('images/icon_02.png')}} ">
                    </div>
                    <div class="col-12 col-lg-9">
                        <h3 class="txt-white text-left txt-red line-h mt-4 wow fadeInRight">VISIÓN</h3>
                            <p class="text-left mt-4 line-h wow fadeInRight" data-wow-delay="0.5s">
                                Crecer a nivel metrpolitano siendo sólidos y confiables en el mercado inmobiliario y constructor, basado en nuestro crecimiento corporativo, en la innovación, en la tecnología, eficiencia, altos estándares de calidad y adelantándonos siempre a las necesidades de nuestros clientes, obteniendo un reconocimiento a nivel metropolitano en el 2022 por nuestra solidez y dedicación como compañía.
                            </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-4 wow fadeIn" data-wow-delay="1s">
        <a href="#" target="blank" class="mb-4 mb-4">
            <button>
                <img width="200px" src=" {{asset('images/btn_01.png')}} ">
            </button>
        </a>
    </div>
{{-- FIN SECTION 2 --}}
@endsection