<?php $current_page = 'index'; ?>
<?php get_header(); ?>
<div class="wrapper">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="inicio">
        <!--<div class="banner-top container">
<div class="vertical-align contact-info pull-right">
<p>
<span class="white"><img src="<?php echo bloginfo('template_url'); ?>/img/icons/email.png" alt="">experto@bif.com.mx</span>
<span class="white"><img src="<?php echo bloginfo('template_url'); ?>/img/icons/telephone.png" alt="">01 800 627.7634</span>
</p>
</div>
</div>-->
        <div class="vertical-align">
            <!--<img class="center-block" src="<?php echo bloginfo('template_url'); ?>/img/banner/caption-2.png" alt="La carne se compra en Bif">-->
        </div>
        <img class="main-banner" src="<?php echo CFS()->get('index_banner'); ?>" alt="Banner Principal">
        <img class="banner-footer" src="<?php echo bloginfo('template_url'); ?>/img/banner/banner_bif.jpg" alt="La carne se compra en bif">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros spacing" id="nosotros">
        <div class="row no-margin">
            <img class="left" src="<?php echo bloginfo('template_url'); ?>/img/nosotros/sucursal.png">
            <div class="container">
                <div class="col-sm-5"></div>
                <div class="col-sm-7">
                    <h1 class="header"><?php echo CFS()->get('nosotros_title');?></h1>
                    <p class="text text-justify">
                        <?php echo CFS()->get('nosotros_text');?>
                    </p>
                    <div class="red-divider"></div>
                    <a href="#video-modal" class="section-header" data-toggle="modal" data-target="#video-modal">Ver&nbsp;&nbsp;&nbsp;&nbsp;Video</a>
                </div>
            </div>
            <img class="right hidden-xs" src="<?php echo bloginfo('template_url'); ?>/img/nosotros/right-meat.png">
        </div>
    </div>
    <div class="modal fade" id="video-modal" role="dialog" tabindex="-1">
        <div class="vertical-align">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo CFS()->get('video');?>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONCEPTO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="concepto" id="concepto">
        <h1 class="header text-center light-spacing"><?php echo CFS()->get('one_stop_title');?></h1>
        <div class="banner-divider">
            <div class="container vertical-align">
                <div class="row no-margin">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/dividers/one-stop.png" alt="One Stop" class="img-responsive vertical-align one-stop">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-7">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/dividers/sabias-que.png" alt="¿Sabías qué?" class="img-responsive">
                        <h3 class="text-justify">
                            <?php echo CFS()->get('one_stop_text');?>
                        </h3>
                        <div class="yellow-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECETAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="recetas" id="recetas">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo bloginfo('template_url'); ?>/img/recetas/bg.jpg" alt=""></div>
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide vertical-align" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
                        $counter = 0;
                        query_posts( 'showposts=10' );
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                if($counter == 0) {
                                    echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
                                } else {
                                    echo '<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                }
                                $counter++;
                            }
                        }
                        wp_reset_query();
                        ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $counter = 0;
                        if ( have_posts() ) {
                            the_post();
                        }
                        ?>									  
                        <?php
                        query_posts( 'showposts=10' );
                        if ( have_posts() ) {
                            while ( have_posts() ) { 
                                the_post();
                                if($counter == 0) {
                                    echo '<div class="item active">';
                                } else {
                                    echo '<div class="item">';
                                }
                        ?>
                        <div class="carousel-caption">
                            <div class="col-sm-5 recipe-img">
                                <img src="<?php echo CFS()->get('img');?>" alt="<?php echo get_the_title(); ?>">
                                <div class="corner-header">
                                    <h2 class="section-header">Receta</h2>
                                </div>
                            </div>
                            <div class="col-sm-7 recipe-des vertical-align">
                                <h1 class="header"><?php echo get_the_title(); ?></h1>
                                <p class="text text-left">
                                    <strong>Ingredientes</strong><br>
                                    <?php echo CFS()->get('ingredientes');?>
                                </p>
                            </div>
                            <a href="<?php echo get_permalink(); ?>" class="pull-right more">Ver receta</a>
                        </div>
                        <?php
                                echo '</div>';
                                $counter++;
                            }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
            <div class="big-btn-container">
                <a href="recetas" class="big-btn center-block section-header">Ver más Recetas</a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ISSUU/TIPOS DE CORTE  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner-divider cortes">
        <div class="banner-divider container">
            <div class="vertical-align col-sm-6">
                <img class="vertical-align img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/dividers/tu-escoges.png" alt="Tu Escoges">
            </div>
            <div class="vertical-align col-sm-6">
                <img class="vertical-align img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/dividers/tipos-cortes.png" alt="Tipos de Corte">
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* GUÍA DE EXPERTO BIF  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="light-spacing text-center" id="guia">
        <h1 class="header"><?php echo CFS()->get('experto_title');?></h1>
    </div>
    <div class="guia text-center">
        <div class="container spacing">
            <?php
            $arrayGuia = CFS()->get('guia_array');
            $arrayEnd = end($arrayGuia);
            $counter = 0;
            foreach( $arrayGuia as $corte ) {
                if($counter == 0 || $counter%6 == 0) {
                    echo '<div class="row no-margin">';
                }
            ?>
            <div class="col-md-2 col-sm-4">
                <a href="#modal-<?php echo $counter;?>" data-toggle="modal" data-target="#modal-<?php echo $counter;?>">
                    <div class="img-container">
                        <img src="<?php echo $corte['principal_img'];?>" alt="Chuletón" class="img-responsive principal">
                    </div>
                    <p class="white title"><?php echo $corte['corte_name'];?></p>
                    <p class="white desc text-left">
                        <?php echo $corte['caracteristicas'];?>
                    </p>
                </a>
            </div>
            <div class="modal fade infografia" id="modal-<?php echo $counter;?>" role="dialog" tabindex="-1">
                <div class="vertical-align">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row no-margin table-row">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-4">
                                        <div class="description bg-orange">
                                            <h2 class="white">DESCRIPCIÓN</h2>
                                        </div>
                                        <p class="white">
                                            <?php echo $corte['corte_desc'];?>
                                        </p>
                                        <img class="center-block img-responsive cow" src="<?php echo $corte['corte_area_img'];?>" alt="Vaca">
                                    </div>
                                    <div class="col-sm-7">
                                        <h1 class="big-header white text-center">= <?php echo $corte['corte_name'];?> =</h1>
                                        <img class="center-block img-responsive main-img" src="<?php echo $corte['corte_img'];?>" alt="New York">
                                        <div class="metodo bg-orange">
                                            <h3 class="white">MÉTODO DE COCCIÓN</h3>
                                        </div>
                                        <div class="row no-margin metodos">
                                            <div class="col-sm-6">
                                                <img src="<?php echo bloginfo('template_url'); ?>/img/infografia/parrilla.png" alt="Parilla">
                                                <p class="white">
                                                    ASADO A LA PARRILLA
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="<?php echo bloginfo('template_url'); ?>/img/infografia/sarten.png" alt="Sartén/Estofado">
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
            <?php
                $counter++;
                if($counter%6 == 0 || $corte == $arrayEnd) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MARINAR  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner-divider marinar">
        <div class="container vertical-align">
            <div class="row">
                <div class="col-sm-5 col-xs-4"></div>
                <div class="col-sm-7 col-xs-8">
                    <h1 class="header text-center"><?php echo CFS()->get('nosotros_title');?></h1>
                    <div class="list-item">
                        <img class="vertical-align" src="<?php echo bloginfo('template_url'); ?>/img/dividers/list-1.png" alt="1"><h3>Escoje la charola de carne que más te guste</h3>
                    </div>
                    <div class="list-item">
                        <img class="vertical-align" src="<?php echo bloginfo('template_url'); ?>/img/dividers/list-2.png" alt="2"><h3>Elige la salsa que más te guste.<br><span class="yellow">BBQ - Teriyaki - Buffalo</span></h3>
                    </div>
                    <div class="list-item">
                        <img class="vertical-align" src="<?php echo bloginfo('template_url'); ?>/img/dividers/list-3.png" alt="3"><h3>Pide a tu carnicero que te lo marine.</h3>
                    </div>
                    <div class="list-item">
                        <img class="vertical-align" src="<?php echo bloginfo('template_url'); ?>/img/dividers/list-4.png" alt="4"><h3>Recibe tu charola ya preparada.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="productos spacing no-spacing-top" id="productos">
        <div class="container text-center">
            <h1 class="header"><?php echo CFS()->get('productos_title');?></h1>
            <?php
            $arrayProductos = CFS()->get('productos_array');
            $arrayEnd = end($arrayProductos);
            $counter = 0;
            foreach( $arrayProductos as $producto ) {
                if($counter == 0 || $counter%3 == 0) {
                    echo '<div class="row no-margin">';
                }
                switch($counter) {
                    case 0:
                        $color = 'bg-brown';
                        break;
                    case 1:
                        $color = 'bg-orange';
                        break;
                    case 2:
                        $color = 'bg-green';
                        break;
                    case 3:
                        $color = 'bg-yellow';
                        break;
                    case 4:
                        $color = 'bg-gold';
                        break;
                    case 5:
                        $color = 'bg-purple';
                        break;
                    case 6:
                        $color = 'bg-blue';
                        break;
                    case 7:
                        $color = 'bg-light-green';
                        break;
                    case 8:
                        $color = 'bg-dark-blue';
                        break;
                }
            ?>
            <div class="col-sm-4">
                <div class="img-container">
                    <img class="img-responsive center-block" src="<?php echo $producto['producto_img']; ?>" alt="Barbacoa">
                </div>
                <div class="header-container <?php echo $color; ?>"><h2 class="section-header vertical-align"><?php echo $producto['producto_name']; ?></h2></div>
                <p class="text">
                    <?php echo $producto['producto_desc']; ?>
                </p>
            </div>
            <?php
                $counter++;
                if($counter%3 == 0 || $producto == $arrayEnd) {
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BARBACOA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="promotional-banner">
        <img src="<?php echo CFS()->get('banner');?>" alt="La Mejor Barbacoa">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PARALLAX SERVICIO AL CLIENTE  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicio">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo bloginfo('template_url'); ?>/img/servicio/bg.jpg" alt=""></div>
            <div class="container text-center">
                <h1 class="white vertical-align section-header"><?php echo CFS()->get('servicio_title');?></h1>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* UBICACIONES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="ubicaciones container light-spacing" id="ubicaciones">
        <h1 class="header text-center"><?php echo CFS()->get('ubicacion_title');?></h1>
    </div>
    <div class="googleMap" id="googleMap" position="chihuahua"></div>
    <div class="light-spacing container text-center ubicaciones">
        <img src="<?php echo bloginfo('template_url'); ?>/img/ubicaciones/chihuahua.png" alt="Chihuahua">
        <p class="title orange">CHIHUAHUA</p>
        <div class="row no-margin">
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToAeropuertoChihuahua()">Aeropuerto Chihuhua</p></a>
                <p class="text">
                    Blvd. Juan Pablo II<br>
                    Colonia Aeropuerto<br>
                    C.P. 31390<br>
                    Ciudad Chihuahua<br>
                    Teléfono (614) 446-8241
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToPolitecnicoChihuahua()">Quintas</p></a>
                <p class="text">
                    Instituto Politécnico Nacional Esq. Minneapolis<br>
                    Colonia Quintas del Sol<br>
                    C.P. 31214<br>
                    Ciudad Chihuahua<br>
                    Teléfono (614) 430-0375
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToHaciendaChihuahua()">Juventud</p></a>
                <p class="text">
                    Hacienda del Valle 6703<br>
                    Colonia Haciendas del Valle<br>
                    C.P. 31217<br>
                    Ciudad Chihuahua<br>
                    Teléfono (614) 423-4244
                </p>
            </div>
        </div>
        <div class="row no-margin">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToValleEscondido()">Valle Escondido</p></a>
                <p class="text">
                    Av. Misión del Bosque No. 9703<br>
                    Fraccionamiento Misión del Valle II<br>
                    Ciudad Chihuahua
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToJuarez()">Aeropuerto Juárez</p></a>
                <p class="text">
                    Carr. Panamericana Km 19<br>
                    Colonia Aeropueto<br>
                    C.P. 32690<br>
                    Ciudad Juárez<br>
                    Teléfono (656) 170-8002
                </p>
            </div>
        </div>
        <img src="<?php echo bloginfo('template_url'); ?>/img/ubicaciones/torreon.png" alt="Torreón">
        <p class="title orange">COAHUILA</p>
        <div class="row no-margin">
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToRositaCoahuila()">Rosita</p></a>
                <p class="text">
                    Paseo de las Flores 601<br>
                    Colonia Campestre la Rosita<br>
                    C.P. 27250<br>
                    Ciudad Torreón<br>
                    Teléfono (871) 721-1718
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToGomezCoahuila()">Gómez</p></a>
                <p class="text">
                    Blvd. Miguel Alemán 107 Esq. Hidalgo<br>
                    Colonia Las Rosas<br>
                    C.P. 35090<br>
                    Ciudad Goméz Palacio<br>
                    Teléfono (871) 714-4105
                </p>
            </div>
            <div class="col-sm-4">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToAeropuertoCoahuila()">Aeropuerto Torreón</p></a>
                <p class="text">
                    Aeropuerto Francisco Sarabia<br>
                    Colonia Aeropuerto<br>
                    C.P. 27016<br>
                    Ciudad Torreón<br>
                    Teléfono (871) 712-2324
                </p>
            </div>
        </div>
        <img src="<?php echo bloginfo('template_url'); ?>/img/ubicaciones/monterrey.png" alt="Nuevo León">
        <p class="title orange">NUEVO LEÓN</p>
        <div class="row no-margin">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToBosquesNuevoLeon()">Bosques del Valle</p></a>
                <p class="text">
                    Av. Roberto Garza Sada 450 Ote.<br>
                    Colonia Bosques del Valle<br>
                    C.P. 64890<br>
                    Ciudad San Pedro Garza G.<br>
                    Teléfono (818) 303-3812
                </p>
            </div>
            <div class="col-sm-3">
                <a href="#googleMap" class="smoothScroll"><p class="orange" onclick="moveToLagosNuevoLeon()">Lagos del Bosque</p></a>
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
            <h1 class="header"><?php echo CFS()->get('contactanos_title');?></h1>
            <div class="col-sm-6 border-right">
                <img src="<?php echo bloginfo('template_url'); ?>/img/icons/phone.png" alt="Teléfono">
                <p class="text">
                    <?php echo CFS()->get('telefono_desc');?>
                </p>
                <p class="orange">
                    <?php echo CFS()->get('telefono_num');?>
                </p>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo bloginfo('template_url'); ?>/img/icons/mail.png" alt="Correo Electrónico">
                <p class="text">
                    <?php echo CFS()->get('correo_desc');?>
                </p>
                <p class="orange">
                    <?php echo CFS()->get('correo_mail');?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>