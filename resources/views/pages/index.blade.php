@extends('layouts.pages')
@section('title','Home')
    
@section('content')
{{-- SLIDER --}}
	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">				
            <!-- Slide -->
            <div class="slide">
                <div class="background_image" style="background-image:url(images/home-01.png)"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content text-center">
                                    <div class="booking_form_container">
                                        <h3 class="txt-white"> Crecemos contigo</h3>
                                        <h1 class="txt-white">Trabajo en equipo,</h1>
                                        <h1 class="txt-red">la calidady enfoque</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/home-02.png)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/home-03.png)"></div>
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
        <div class="col-10 mt-4">
            <h2 class="txt-white text-center">Somos una compañia de 
                <br> arquitectura 100% colombiana</h2>
            <p class="txt-white text-justify mt-4 line-h">
                Especializada en el sector de bienes raíces y construcción, somos una empresa que se desarrolla, se caracteriza y crece gracias al trabajo en equipo, la calidad, el enfoque hacia las últimas tendencias arquitectónicas y la tecnología, la dedicación por hacer bien las cosas, y la responsabilidad como empresa, y con nuestros clientes.  Nuestro equipo de trabajo es especialista en estos sectores y nuestro objetivo siempre es satisfacer las necesidades de nuestros clientes: comercialización, venta y arriendo de inmuebles, adecuaciones físicas oficinas-vivienda y remodelaciones, construcción y ejecución de proyectos, interventorías, asesorías de inversión en finca raíz nacional y en USA, administración de propiedad horizontal y gerencia de proyectos.
            </p>
            <p class="txt-white text-justify mt-4 line-h mb-4" >
                Nuestra atención es personalizada, adelantándonos a las necesidades de nuestra metrópolis y de nuestros clientes, siempre ofreciendo eficacia, calidad, confianza, agilidad, y seguridad, apalancados en nuestra experiencia y nuestroexcelente servicio al cliente. Tenemos experiencia en diseño y construcción en mas de 40.000m2 en multifamiliares de estratos medios, conusos mixtos.
            </p>
        </div>
    </div>
</div>
{{-- FIN SECCION --}}
{{-- SECTION 2 --}}
<div class="row justify-content-md-center">
        <div class="col-4 mt-4">
            <h3 class="txt-white text-right txt-red line-h">MISIÓN</h3>
            <p class="text-right mt-4 line-h">
                Diseñar, construir y comercializar prtoyectos de obra civil e inmobiliarios, basados en las últimas tendencias constructivas, con altos estándares de calidad y eficiencia requeridas, y según las necesidades de nuestros clientes, utilizando nuestros valores corporativos que son la excelencia, el respeto, la eficacia, y un altísimo servicio al cliente.
            </p>
        </div>
        <div class="col-3 mt-4">
               <img src=" {{ asset('images/img_01.png') }} " alt="">
         </div>
         <div class="col-4 mt-4">
                <h3 class="txt-white text-left txt-red line-h">VISIÓN</h3>
                <p class="text-left mt-4 line-h">
                    Crecer a nivel metrpolitano siendo sólidos y confiables en el mercado inmobiliario y constructor, basado en nuestro crecimiento corporativo, en la innovación, en la tecnología, eficiencia, altos estándares de calidad y adelantándonos siempre a las necesidades de nuestros clientes, obteniendo un reconocimiento a nivel metropolitano en el 2022 por nuestra solidez y dedicación como compañía.
                </p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <a href="#" target="blank">
            <button>
                <img width="200px" src=" {{asset('images/btn_01.png')}} ">
            </button>
        </a>
    </div>
{{-- FIN SECTION 2 --}}
@endsection