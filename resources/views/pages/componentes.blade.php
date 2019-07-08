@section('botones_redes')
    
{{-- BOTONES REDES SOCIALES --}}
@foreach ($info as $link)
    

<div class="botones-flotantes">
	<a target="_blank" href="{{$link->link_fb}}" data-wow-delay="1s" data-wow-duration="0.3s"
        class="wow slideInRight boton_flotante btn-redes-01">
		<img width="50px" src="{{asset('images/redes_fb.png')}}"> 
	</a>
	<a target="_blank" href="{{$link->link_ig}}" data-wow-delay="1s" data-wow-duration="0.3s"
		class="wow slideInRight boton_flotante btn-redes-02">
		<img width="50px" src="{{asset('images/redes_ig.png')}}"> 
	</a>
	<a target="_blank" href="{{$link->link_tw}}" data-wow-delay="1s" data-wow-duration="0.3s"
		class="wow slideInRight boton_flotante btn-redes-03">
		<img width="50px" src="{{asset('images/redes_tw.png')}}"> 
	</a>
	<a target="_blank" href="{{$link->link_wt}}" data-wow-delay="1s" data-wow-duration="0.3s"
		class="wow slideInRight boton_flotante btn-redes-04">
		<img width="50px" src="{{asset('images/redes_wp.png')}}"> 
	</a>
	<a target="_blank" href="{{$link->link_yt}}" data-wow-delay="1s" data-wow-duration="0.3s"
		class="wow slideInRight boton_flotante btn-redes-05">
		<img width="50px" src="{{asset('images/redes_yt.png')}}"> 
	</a>
	<a target="_blank" href="{{$link->link_pse}}" data-wow-delay="1s" data-wow-duration="0.3s"
		class="wow slideInRight boton_flotante btn-redes-06">
		<img width="50px" src="{{asset('images/redes_pse.png')}}"> 
	</a>
</div>	
@endforeach
{{-- FIN BOTONES REDES SOCIALES  --}}

@endsection

@section('footer')
    @foreach ($info as $link)
	<footer class="bg-gray text-center sticky-bottom">
		<div class="row">
				<div class="col-6 col-lg-3 mt-4 mb-4" >
						<p class="txt-white text-right my wow slideInLeft"><span>MENÚ:</span><br>
							<a class="fn-dinn txt-none" href="/"> somos f&v </a><br>
							<a class="fn-dinn txt-none" href="/inmobiliaria"> inmobiliaria </a><br>
							<a class="fn-dinn txt-none" href="/construccion"> construcción </a><br>

						</p>
					</div>
				<div class="col-6 col-lg-3 mt-4 mb-4" style="border-right:2px solid white; ">
						<p class="txt-white text-right my wow slideInLeft"><span></span><br>
							<a class="fn-dinn txt-none" href="/arquitectura"> arquitectura </a><br>
							<a class="fn-dinn txt-none" href="/contacto"> contácto</a><br>
                        <a class="fn-dinn txt-none" target="blank" href="{{$link->link_pse}}"> Pagos con PSE</a>
						</p>
					</div>
					<div class="col-6 col-lg-3 mt-4 mb-4">
							<p class="txt-white text-left my wow slideInRight"><span>VISITA NUESTRAS REDES</span><br>
								<div class="d-flex">
										<a target="_blank" href="{{$link->link_fb}}" data-wow-delay="1s" data-wow-duration="0.3s"
											class="wow fadeInUp txt-none">
											<img width="50px" src="{{asset('images/redes_fb.png')}}"> 
										</a>
										<a target="_blank" href="{{$link->link_ig}}" data-wow-delay="1s" data-wow-duration="0.3s"
											class="wow fadeInUp txt-none">
											<img width="50px" src="{{asset('images/redes_ig.png')}}"> 
										</a>
										<a target="_blank" href="{{$link->link_tw}}" data-wow-delay="1s" data-wow-duration="0.3s"
											class="wow fadeInUp txt-none">
											<img width="50px" src="{{asset('images/redes_tw.png')}}"> 
										</a>
										<a target="_blank" href="{{$link->link_wt}}" data-wow-delay="1s" data-wow-duration="0.3s"
											class="wow fadeInUp txt-none">
											<img width="50px" src="{{asset('images/redes_wp.png')}}"> 
										</a>
										<a target="_blank" href="{{$link->link_yt}}" data-wow-delay="1s" data-wow-duration="0.3s"
											class="wow fadeInUp txt-none">
											<img width="50px" src="{{asset('images/redes_yt.png')}}"> 
										</a>
									</div><br>
							
							</div>
			<div class="col-6 col-lg-3 mt-4 mb-4">
            <p class="txt-white text-left my wow slideInRight" >{{$link->direccion}} <br>CEL: {{$link->celular}}</p>
				</div>
		</div>
		<p class="txt-white wow fadeInUp"  data-wow-delay="0.5s">Diseñado y digramado por <a href="http://gsvdigital.com" target="blank">
			<b>
				gsvdigital.com
			</b>
		</a> todos los derechos reservados</p>
    </footer>
    @endforeach
{{-- FIN FOOTER  --}}
@endsection