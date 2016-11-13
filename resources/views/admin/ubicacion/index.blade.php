@extends('layouts.admin')
@section('content')

	<div class="row" id="app">
        <div class="panel panel-info">
			<div class="panel-heading text-center">
                <h3>Ubicacion</h3>
            </div>
		</div>
		<div class="space"></div>
		<div class="col-lg-7 col-sm-7">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.0367572077748!2d-76.95578412890097!3d-12.16151498576458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA5JzQwLjciUyA3NsKwNTcnMjEuMiJX!5e0!3m2!1ses!2spe!4v1437061649939" width="650" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-lg-5 col-sm-5">
			<h5>Nos Ubicamos</h5>
			<div class="space"></div>
			<div class="col-lg-2 col-sm-2">
				<ul class="list">
					<h4><img src="icono/home.jpg"></h4>
					<h4><img src="icono/telefono.jpg"></h4>
					<h4><img src="icono/cell.jpg"></h4>
					
					<h4><img src="icono/mensaje.jpg"></h4>
					
				</ul>
			</div>
			<div class="col-lg-10 col-sm-10">
				<ul class="list">
					<h6 >Av. Los Heroes 1385 -San Juan de Miraflores - Lima </h6>
					<h6 >(01) 283 1518</h6>
					<h6 >(+51) 994 363 323</h6>
					
					<h6 ><a href="www.hotmail.com">ezau.05@hotmail.com</a></h6>
					
				</ul>
			</div>
		</div>
	</div>

@stop