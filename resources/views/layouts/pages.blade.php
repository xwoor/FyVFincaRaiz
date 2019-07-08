<!DOCTYPE html>
    <html lang="es">
        <head>
            <title>FyV - @yield('title')</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="Diseñar, construir y comercializar prtoyectos de obra civil e inmobiliarios, basados en las últimas tendencias constructivas, con altos estándares de calidad y eficiencia requeridas, y según las necesidades de nuestros clientes, utilizando nuestros valores corporativos que son la excelencia, el respeto, la eficacia, y un altísimo servicio al cliente.">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		   	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
            <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
            <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
            <link rel="stylesheet" type="text/css" href="styles/responsive.css">
            <link rel="stylesheet" type="text/css" href="css/estilos.css">
			<link rel="stylesheet" type="text/css" href="css/animate.css">
			<script src="js/wow.js"></script>
			<script>
				new WOW().init();
			</script>
					
        </head>
<body>
@yield('botones_redes')
	<div class="super_container">
{{-- MENU --}}
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start wow slideInDown">
				<div class=""><a href="/"><img src="{{asset('images/logo_01.png') }}" alt=""></a></div>
			<div class=""><a href="/" > </a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="{{ Request::is('/') ? 'active' : ''}}">
							<a href="/">SOMOS F&V</a>
						</li>
						<li class="{{ Request::is('inmobiliaria') ? 'active' : ''}}">
							<a href="/inmobiliaria">
								INMOBILIARIA
							</a>
						</li>
						<li class="{{ Request::is('construccion') ? 'active' : ''}}">
							<a href="/construccion">
								CONSTRUCCIÓN
							</a>
						</li >
						<li class="{{ Request::is('arquitectura') ? 'active' : ''}}">
							<a href="/arquitectura">
								ARQUITECTURA
							</a>
						</li>
						<li class="{{ Request::is('contacto') ? 'active' : ''}} mt4">
							<a href="/contacto">
								CONTACTO
							</a>
						</li>
					</ul>
				</nav>
				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
{{-- FIN MENU --}}
{{-- MENU MOVIL --}}
	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start ">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li class="{{ Request::is('') ? 'active' : ''}} ">
						<a href="/" class="mt-4">SOMOS F&V</a> <hr>
					</li>
					<li class="{{ Request::is('inmobiliaria') ? 'active' : ''}}">
						<a href="/inmobiliaria">
							INMOBILIARIA
						</a> <hr>
					</li>
					<li class="{{ Request::is('construccion') ? 'active' : ''}}">
						<a href="/construccion">
							CONSTRUCCIÓN
						</a> <hr>
					</li >
					<li class="{{ Request::is('arquitectura') ? 'active' : ''}}">
						<a href="/arquitectura">
							ARQUITECTURA
						</a> <hr>
					</li>
					<li class="{{ Request::is('') ? 'active' : ''}}">
						<a href="/">
							CONTACTO
						</a> <hr>
					</li>
				</ul>
			</nav>
		</div>
	</div>
{{-- FIN MENU MOVIL --}}
{{-- PAGES CONTENT --}}
	@yield('content')
{{-- FIN PAGES CONTENT --}}
{{-- FOOTER --}}
@yield('footer')
{{-- FOOTER --}}
</div> {{-- /super_container --}}
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
<script>
$(document).ready( function() {
    $('#myCarousel').carousel({
		interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});</script>

</body>
</html>