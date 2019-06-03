@extends('layouts.pages')
@section('title','Inmobiliaria')
    
@section('content')
{{-- SLIDER --}}
<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">				
            <!-- Slide -->
            <div class="slide">
                <div class="background_image" style="background-image:url(images/inmobiliaria_01.png)"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="home_content text-center">
                                    <div class="booking_form_container lh-15">
                                        <h1 class="txt-white text-left"> Diseño <br> arquitectónico
                                            </h1>
                                        <h1 class="txt-red  text-left">de innovación</h1>                                        </h1>
                                        <p class="txt-white  text-left lh-15">
                                            Estamos a la vanguardia teniendo encuenta las últimas <br>
                                            tendencias, de proyectos multifamiliares, unifamililes, <br>
                                            comerciales, oficinas y locales comerciales.
                                        </p>
                                    </div>
                                    <button class=" mt-100 animated bounce">
                                        <a href="#">
                                            <img src="{{asset('images/btn_01.png')}}" >
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<!-- Slide -->
				<div class="slide">
                    <div class="background_image" style="background-image:url(images/inmobiliaria_02.png)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                    <div class="col-12">
                                            <div class="home_content text-center">
                                                <div class="booking_form_container lh-15">
                                                        <h1 class="txt-white text-left"> Asesoria</h1>
                                                        <h1 class="txt-red  text-left">100% integral</h1>
                                                        <p class="txt-white  text-left lh-15">
                                                            Orientación en todo tipo de acabados y materiales <br>
                                                            constructivos, para la personalización de su inmueble: <br>
                                                            especificaciones de construcción y de acabados.
                                                        </p>
                                                    </div>
                                                    <button class=" mt-100 animated bounce">
                                                        <a href="#">
                                                            <img src="{{asset('images/btn_01.png')}}" >
                                                        </a>
                                                    </button>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- Slide -->
				<div class="slide">
                    <div class="background_image" style="background-image:url(images/inmobiliaria_03.png)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                    <div class="col-12">
                                            <div class="home_content text-center">
                                                <div class="booking_form_container lh-15">
                                                    <h1 class="txt-white text-left">Diligenciamos</h1>
                                                    <h1 class="txt-red  text-left">Trámites 
                                                        <br>de Construcción
                                                    </h1>
                                                    <p class="txt-white  text-left lh-15">
                                                            Para hacer de tutiempo más productivo realizamos tus trámites <br>
                                                            de licencia de construcción y urbanismo, trámites de licencia de <br>
                                                            excavación, PMT (plan de manejo de trafico), tramites ante <br>
                                                            entidades publicas. <br> <br>
                                                            Elaboración de presupuestos y control de programación, <br>
                                                            basados en los diseños y especificaciones dadas.
                                                    </p>
                                                </div>
                                                <button class=" mt-100 animated bounce ">
                                                    <a href="#">
                                                        <img src="{{asset('images/btn_01.png')}}" >
                                                    </a>
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
@endsection