<?php $current_page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* BANNER  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="banner" id="inicio">
		<div class="banner-top container">
			<div class="vertical-align contact-info pull-right">
				<p>
					<span class="white"><img src="img/icons/email.png" alt="">experto@bif.com.mx</span>
					<span class="white"><img src="img/icons/telephone.png" alt="">01 800 627.7634</span>
				</p>
			</div>
		</div>
		<div class="vertical-align">
			<img class="center-block" src="img/banner/caption.png" alt="Para expertos en carne y en el buen comer">
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* NOSOTROS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="nosotros spacing" id="nosotros">
		<div class="row no-margin">
			<img class="left" src="img/nosotros/sucursal.png">
			<div class="container">
				<div class="col-sm-5"></div>
				<div class="col-sm-7">
					<h1 class="header">¿Qué es Bif?</h1>
					<p class="text text-justify">Bif es una cadena de tiendas con un nuevo concepto denominado Boutique de carnes, la cual está diseñada para satisfacer los gustos más exigentes y exclusivos en el arte del buen comer. Nuevas tiendas Bif, para expertos en carnes y el buen comer.</p>
					<div class="red-divider"></div>
					<a href="#video-modal" class="section-header" data-toggle="modal" data-target="#video-modal">Ver&nbsp;&nbsp;&nbsp;&nbsp;Video</a>
				</div>
			</div>
			<img class="right hidden-xs" src="img/nosotros/right-meat.png">
		</div>
	</div>
	<div class="modal fade" id="video-modal" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/PZ4pctQMdg4?start=16" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* RECETAS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="recetas" id="recetas">
		<div class="parallax-container">
			<div class="parallax"><img src="img/recetas/bg.jpg" alt=""></div>
			<div class="container">
				<div id="carousel-example-generic" class="carousel slide vertical-align" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="carousel-caption">
								<div class="col-sm-5 recipe-img">
									<img src="img/recetas/pollo.png" alt="Pollo">
									<div class="corner-header">
										<h2 class="section-header">Receta</h2>
									</div>
								</div>
								<div class="col-sm-7 recipe-des vertical-align">
									<h1 class="header">Pollo</h1>
									<p class="text text-left">
										<strong>Ingredientes</strong><br>
										- Proin bibendum lacus ut metus convallis malesuada.<br>
										- Phasellus vestibulum odio quis ligula efficitur tincidunt.<br>
										- Etiam porttitor lorem at augue viverra blandit.<br>
										- Nunc consectetur sapien tincidunt tempor condimentum.<br>
										- Sed finibus ex eget fringilla gravida.<br>
									</p>
								</div>
							</div>
							<a href="#" class="pull-right more">Ver receta</a>
						</div>
					</div>
				</div>
			</div>
			<div class="big-btn-container">
				<a href="recetas.php" class="big-btn center-block section-header">Ver más Recetas</a>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* GUÍA DE EXPERTO BIF  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="light-spacing text-center" id="guia">
		<h1 class="header">Guía Experto BIF</h1>
	</div>
	<div class="guia text-center">
		<div class="row no-margin">
			<div class="container spacing">
				<div class="col-md-2 col-sm-4">
					<a href="#chuleton" data-toggle="modal" data-target="#chuleton">
						<div class="img-container">
							<img src="img/guia/1.png" alt="Chuletón" class="img-responsive">
						</div>
						<p class="white title">chuletón</p>
						<p class="white desc text-left">
							1. Para asar y la plancha.<br>
							2. Ya está marinado
						</p>
					</a>
				</div>
				<div class="col-md-2 col-sm-4">
					<a href="#diezmillo" data-toggle="modal" data-target="#diezmillo">
						<div class="img-container">
							<img src="img/guia/2.png" alt="Diezmillo" class="img-responsive">
						</div>
						<p class="white title">diezmillo</p>
						<p class="white desc text-left">
							1. Para asar y la plancha.<br>
							2. Jugoso y sabroso.
						</p>
					</a>
				</div>
				<div class="col-md-2 col-sm-4">
					<a href="#t-bone" data-toggle="modal" data-target="#t-bone">
						<div class="img-container">
							<img src="img/guia/3.png" alt="T-Bone" class="img-responsive">
						</div>
						<p class="white title">t-bone</p>
						<p class="white desc text-left">
							1. Para asar y la plancha.<br>
							2. Dos en uno NY / Filete.
						</p>
					</a>
				</div>
				<div class="col-md-2 col-sm-4">
					<a href="#top-sirloin" data-toggle="modal" data-target="#top-sirloin">
						<div class="img-container">
							<img src="img/guia/4.png" alt="Top Sirloin" class="img-responsive">
						</div>
						<p class="white title">top sirloin</p>
						<p class="white desc text-left">
							1. Para asar y cocinar.<br>
							2. Corte multiusos.
						</p>
					</a>
				</div>
				<div class="col-md-2 col-sm-4">
					<a href="#new-york" data-toggle="modal" data-target="#new-york">
						<div class="img-container">
							<img src="img/guia/5.png" alt="New York" class="img-responsive">
						</div>
						<p class="white title">new york</p>
						<p class="white desc text-left">
							1. Para asar.<br>
							- Sabroso -<br>
							2. Textura más firme.
						</p>
					</a>
				</div>
				<div class="col-md-2 col-sm-4">
					<a href="#rib-eye" data-toggle="modal" data-target="#rib-eye">
						<div class="img-container">
							<img src="img/guia/6.png" alt="Rib Eye" class="img-responsive">
						</div>
						<p class="white title">rib eye</p>
						<p class="white desc text-left">
							1. Para asar y la plancha.<br>
							2. Marmoleo blando y jugoso.
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade infografia" id="new-york" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row no-margin table-row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="description bg-pink">
									<h2 class="white">DESCRIPCIÓN</h2>
								</div>
								<p class="white">
									- Magro, suave y lleno de sabor.
									<br><br>
									- Cocción rápida,terso con textura robusta.
								</p>
								<img class="center-block img-responsive cow" src="img/infografia/cow-ny.png" alt="Vaca">
							</div>
							<div class="col-sm-7">
								<h1 class="big-header white text-center">= NEW YORK =</h1>
								<img class="center-block img-responsive main-img" src="img/infografia/new-york.png" alt="New York">
								<div class="metodo bg-pink">
									<h3 class="white">MÉTODO DE COCCIÓN</h3>
								</div>
								<div class="row no-margin metodos">
									<div class="col-sm-6">
										<img src="img/infografia/parrilla.png" alt="Parilla">
										<p class="white">
											ASADO A LA PARRILLA
										</p>
									</div>
									<div class="col-sm-6">
										<img src="img/infografia/sarten.png" alt="Sartén/Estofado">
										<p class="white">
											SARTÉN/ ESTOFADO
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade infografia" id="top-sirloin" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row no-margin table-row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="description bg-pink">
									<h2 class="white">DESCRIPCIÓN</h2>
								</div>
								<p class="white">
									Versátil, jugoso y se le conoce como top sirloin al corte redondeado que contiene la picaña.
									<br><br>
									No tiene hueso y tiene poca grasa.
								</p>
								<img class="center-block img-responsive cow" src="img/infografia/cow-ts.png" alt="Vaca">
							</div>
							<div class="col-sm-7">
								<h1 class="big-header white text-center">= TOP SIRLOIN =</h1>
								<img class="center-block img-responsive main-img" src="img/infografia/top-sirloin.png" alt="Top Sirloin">
								<div class="metodo bg-pink">
									<h3 class="white">MÉTODO DE COCCIÓN</h3>
								</div>
								<div class="row no-margin metodos">
									<div class="col-sm-6">
										<img src="img/infografia/parrilla.png" alt="Parilla">
										<p class="white">
											ASADO A LA PARRILLA
										</p>
									</div>
									<div class="col-sm-6">
										<img src="img/infografia/sarten.png" alt="Sartén/Estofado">
										<p class="white">
											SARTÉN/ ESTOFADO
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade infografia" id="rib-eye" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row no-margin table-row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="description bg-pink">
									<h2 class="white">DESCRIPCIÓN</h2>
								</div>
								<p class="white">
									Versátil, jugoso y se le conoce como top sirloin al corte redondeado que contiene la picaña.
									<br><br>
									No tiene hueso y tiene poca grasa.
								</p>
								<img class="center-block img-responsive cow" src="img/infografia/cow-rib.png" alt="Vaca">
							</div>
							<div class="col-sm-7">
								<h1 class="big-header white text-center">= RIB EYE =</h1>
								<img class="center-block img-responsive main-img" src="img/infografia/rib-eye.png" alt="Rib Eye">
								<div class="metodo bg-pink">
									<h3 class="white">MÉTODO DE COCCIÓN</h3>
								</div>
								<div class="row no-margin metodos">
									<div class="col-sm-6">
										<img src="img/infografia/parrilla.png" alt="Parilla">
										<p class="white">
											ASADO A LA PARRILLA
										</p>
									</div>
									<div class="col-sm-6">
										<img src="img/infografia/sarten.png" alt="Sartén/Estofado">
										<p class="white">
											SARTÉN/ ESTOFADO
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade infografia" id="t-bone" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row no-margin table-row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="description bg-pink">
									<h2 class="white">DESCRIPCIÓN</h2>
								</div>
								<p class="white">
									Es un corte muy popular, una de sus presentaciones es en la porción de lomo la cual le da un delicioso sabor y una excelente textura.
								</p>
								<img class="center-block img-responsive cow" src="img/infografia/cow-tbone.png" alt="Vaca">
							</div>
							<div class="col-sm-7">
								<h1 class="big-header white text-center">= T BONE =</h1>
								<img class="center-block img-responsive main-img" src="img/infografia/t-bone.png" alt="T-Bone">
								<div class="metodo bg-pink">
									<h3 class="white">MÉTODO DE COCCIÓN</h3>
								</div>
								<div class="row no-margin metodos">
									<div class="col-sm-6">
										<img src="img/infografia/parrilla.png" alt="Parilla">
										<p class="white">
											ASADO A LA PARRILLA
										</p>
									</div>
									<div class="col-sm-6">
										<img src="img/infografia/sarten.png" alt="Sartén/Estofado">
										<p class="white">
											SARTÉN/ ESTOFADO
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade infografia" id="chuleton" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row no-margin table-row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="description bg-pink">
									<h2 class="white">DESCRIPCIÓN</h2>
								</div>
								<p class="white">
									Este corte es conocido por ser uno de los más jugosos y rebosantes de sabor, está considerado entre los cortes más suaves que se pueden encontrar en al carne de res.
								</p>
								<img class="center-block img-responsive cow" src="img/infografia/cow-chuleton.png" alt="Vaca">
							</div>
							<div class="col-sm-7">
								<h1 class="big-header white text-center">= CHULETÓN =</h1>
								<img class="center-block img-responsive main-img" src="img/infografia/chuleton.png" alt="Chuletón">
								<div class="metodo bg-pink">
									<h3 class="white">MÉTODO DE COCCIÓN</h3>
								</div>
								<div class="row no-margin metodos">
									<div class="col-sm-6">
										<img src="img/infografia/parrilla.png" alt="Parilla">
										<p class="white">
											ASADO A LA PARRILLA
										</p>
									</div>
									<div class="col-sm-6">
										<img src="img/infografia/sarten.png" alt="Sartén/Estofado">
										<p class="white">
											SARTÉN/ ESTOFADO
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade infografia" id="diezmillo" role="dialog">
		<div class="vertical-align">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row no-margin table-row">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="description bg-pink">
									<h2 class="white">DESCRIPCIÓN</h2>
								</div>
								<p class="white">
									Proviene del cuarto delantero de la res, entre el lomo y las costillas, su uso común es en asados.
								</p>
								<img class="center-block img-responsive cow" src="img/infografia/cow-diezmillo.png" alt="Vaca">
							</div>
							<div class="col-sm-7">
								<h1 class="big-header white text-center">= DIEZMILLO =</h1>
								<img class="center-block img-responsive main-img" src="img/infografia/diezmillo.png" alt="Diezmillo">
								<div class="metodo bg-pink">
									<h3 class="white">MÉTODO DE COCCIÓN</h3>
								</div>
								<div class="row no-margin metodos">
									<div class="col-sm-6">
										<img src="img/infografia/parrilla.png" alt="Parilla">
										<p class="white">
											ASADO A LA PARRILLA
										</p>
									</div>
									<div class="col-sm-6">
										<img src="img/infografia/sarten.png" alt="Sartén/Estofado">
										<p class="white">
											SARTÉN/ ESTOFADO
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* PRODUCTOS  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="productos spacing" id="productos">
		<div class="container text-center">
			<h1 class="header">Productos</h1>
			<div class="row no-margin">
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/res.png" alt="Res">
					</div>
					<div class="header-container bg-pink"><h2 class="section-header vertical-align">Res</h2></div>
					<p class="text">
						Diferentes cortes de carne como los Cortes Jr. que son cortes finos de lomo de res más delgados, por lo que se cocinan más rápido y son la porción exacta para tus hijos.
					</p>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/cortes.png" alt="Cortes Especiales">
					</div>
					<div class="header-container bg-green"><h2 class="section-header vertical-align">Cortes</h2></div>
					<p class="text">
						Cortes especiales para asar.
						Phasellus non risus ac nisl volutpat sodales. Ut ultrices nulla in ultrices dictum.
					</p>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/cortes-finos.png" alt="Cortes Finos">
					</div>
					<div class="header-container bg-yellow"><h2 class="section-header vertical-align">Cortes Finos y Quesos</h2></div>
					<p class="text">
						Como los cortes Chice cuyo marmoleo le da jugosidad, sabor y suavidad a la carne.
					</p>
				</div>
			</div>
			<div class="row no-margin">
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/pollo.png" alt="Pollo">
					</div>
					<div class="header-container bg-gold"><h2 class="section-header vertical-align">Pollo</h2></div>
					<p class="text">
						Pechugas,  milanesa, alitas picosas, piernita enchilada y la línea light con pollo totalmente desgrasado.
					</p>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/cerdo.png" alt="Cerdo">
					</div>
					<div class="header-container bg-purple"><h2 class="section-header vertical-align">Cerdo</h2></div>
					<p class="text">
						Chuleta ahumada, pierna, lomo.
						Phasellus non risus ac nisl volutpat sodales. Ut ultrices nulla in ultrices dictum.
					</p>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/pescado.png" alt="Pescado">
					</div>
					<div class="header-container bg-blue"><h2 class="section-header vertical-align">Pescado</h2></div>
					<p class="text">
						Filete tilapia, salmón ahumado, camarones.
					</p>
				</div>
			</div>
			<div class="row no-margin">
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/one-stop.png" alt="One Stop">
					</div>
					<div class="header-container bg-brown"><h2 class="section-header vertical-align">One Stop</h2></div>
					<p class="text">
						Pechugas,  milanesa, alitas picosas, piernita enchilada y la línea light con pollo totalmente desgrasado.
					</p>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/productos-reg.png" alt="Productos Regionales">
					</div>
					<div class="header-container bg-light-green"><h2 class="section-header vertical-align">Productos Regionales</h2></div>
					<p class="text">
						Chuleta ahumada, pierna, lomo.
						Phasellus non risus ac nisl volutpat sodales. Ut ultrices nulla in ultrices dictum.
					</p>
				</div>
				<div class="col-sm-4">
					<div class="img-container">
						<img class="img-responsive center-block" src="img/productos/cocina-facil.png" alt="Cocina Fácil">
					</div>
					<div class="header-container bg-dark-blue"><h2 class="section-header vertical-align">Cocina Fácil</h2></div>
					<p class="text">
						Filete tilapia, salmón ahumado, camarones.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* PARALLAX SERVICIO AL CLIENTE  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="servicio">
		<div class="parallax-container">
			<div class="parallax"><img src="img/servicio/bg.jpg" alt=""></div>
			<div class="container text-center">
				<h1 class="white vertical-align section-header">Servicio &nbsp;a &nbsp;Clientes</h1>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* UBICACIONES  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="ubicaciones container light-spacing" id="ubicaciones">
		<h1 class="header text-center">Ubica tu tienda BIF más cercana</h1>
	</div>
	<div class="googleMap" id="googleMap" position="chihuahua"></div>
	<div class="light-spacing container text-center ubicaciones">
		<img src="img/ubicaciones/chihuahua.png" alt="Chihuahua">
		<p class="title pink">CHIHUAHUA</p>
		<div class="row no-margin">
			<div class="col-sm-3">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToAeropuertoChihuahua()">Aeropuerto Chihuhua</p></a>
				<p class="text">
					Blvd. Juan Pablo II<br>
					Colonia Aeropuerto<br>
					C.P. 31390<br>
					Ciudad Chihuahua<br>
					Teléfono (614) 446-8241
				</p>
			</div>
			<div class="col-sm-3">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToPolitecnicoChihuahua()">Quintas</p></a>
				<p class="text">
					Instituto Politécnico Nacional Esq. Minneapolis<br>
					Colonia Quintas del Sol<br>
					C.P. 31214<br>
					Ciudad Chihuahua<br>
					Teléfono (614) 430-0375
				</p>
			</div>
			<div class="col-sm-3">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToHaciendaChihuahua()">Juventud</p></a>
				<p class="text">
					Hacienda del Valle 6703<br>
					Colonia Haciendas del Valle<br>
					C.P. 31217<br>
					Ciudad Chihuahua<br>
					Teléfono (614) 423-4244
				</p>
			</div>
			<div class="col-sm-3">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToJuarez()">Aeropuerto Juárez</p></a>
				<p class="text">
					Carr. Panamericana Km 19<br>
					Colonia Aeropueto<br>
					C.P. 32690<br>
					Ciudad Juárez<br>
					Teléfono (656) 170-8002
				</p>
			</div>
		</div>
		<img src="img/ubicaciones/torreon.png" alt="Torreón">
		<p class="title pink">COAHUILA</p>
		<div class="row no-margin">
			<div class="col-sm-4">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToRositaCoahuila()">Rosita</p></a>
				<p class="text">
					Paseo de las Flores 601<br>
					Colonia Campestre la Rosita<br>
					C.P. 27250<br>
					Ciudad Torreón<br>
					Teléfono (871) 721-1718
				</p>
			</div>
			<div class="col-sm-4">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToGomezCoahuila()">Gómez</p></a>
				<p class="text">
					Blvd. Miguel Alemán 107 Esq. Hidalgo<br>
					Colonia Las Rosas<br>
					C.P. 35090<br>
					Ciudad Goméz Palacio<br>
					Teléfono (871) 714-4105
				</p>
			</div>
			<div class="col-sm-4">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToAeropuertoCoahuila()">Aeropuerto Torreón</p></a>
				<p class="text">
					Aeropuerto Francisco Sarabia<br>
					Colonia Aeropuerto<br>
					C.P. 27016<br>
					Ciudad Torreón<br>
					Teléfono (871) 712-2324
				</p>
			</div>
		</div>
		<img src="img/ubicaciones/monterrey.png" alt="Nuevo León">
		<p class="title pink">NUEVO LEÓN</p>
		<div class="row no-margin">
			<div class="col-sm-3"></div>
			<div class="col-sm-3">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToBosquesNuevoLeon()">Bosques del Valle</p></a>
				<p class="text">
					Av. Roberto Garza Sada 450 Ote.<br>
					Colonia Bosques del Valle<br>
					C.P. 64890<br>
					Ciudad San Pedro Garza G.<br>
					Teléfono (818) 303-3812
				</p>
			</div>
			<div class="col-sm-3">
				<a href="#googleMap" class="smoothScroll"><p class="pink" onclick="moveToLagosNuevoLeon()">Lagos del Bosque</p></a>
				<p class="text">
					Av. Eugenio Garza Sada 6630<br>
					Colonia Frac. Lagos del Bosque<br>
					C.P. 64890<br>
					Ciudad Monterrey<br>
					Teléfono (811) 099-1011
				</p>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

	<!--/* CONTACTO  */-->

	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div class="contacto light-spacing" id="contacto">
		<div class="container text-center">
			<h1 class="header">Contáctanos</h1>
			<div class="col-sm-6 border-right">
				<img src="img/icons/phone.png" alt="Teléfono">
				<p class="text">
					Para atención especial a nuestros clientes
				</p>
				<p class="pink">
					01 800 627.7634
				</p>
			</div>
			<div class="col-sm-6">
				<img src="img/icons/mail.png" alt="Correo Electrónico">
				<p class="text">
					O bien por correo electrónico
				</p>
				<p class="pink">
					experto@bif.com.mx
				</p>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>