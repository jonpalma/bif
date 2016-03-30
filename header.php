<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bif</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="img/logo.png" alt="Bif"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav pull-right">
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#inicio">Inicio <span class="sr-only">(current)</span></a></li>
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#nosotros">Nosotros</a></li>
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#recetas">Recetas</a></li>
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#guia">Guía Experto</a></li>
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#productos">Productos</a></li>
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#ubicaciones">Ubicaciones</a></li>
						<li><a class="vertical-align smoothScroll" href="<?php if(isset($current_page)){ if($current_page != 'index'){ echo 'index.php'; }} ?>#contacto">Contacto</a></li>
						<li><a class="vertical-align facebook" href="https://www.facebook.com/Lacarnesecompraenbif" target="_blank"><img src="img/icons/fb.png" alt="facebook"></a></li>
					</ul>
				</div>
			</div>
		</nav>