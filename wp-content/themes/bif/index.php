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
                    <h1 class="header">¿Qué es Bif?</h1>
                    <p class="text text-justify">Carnes Bif se renueva para ofrecerte todo en un solo lugar, desde cerveza, refrescos hasta los quesos y las carnes frías, hamburguesas, papas a la francesa, verduras, carne seca, tortillas, salsas, carbón y por supuesto los mejores cortes de carne de res, pollo y cerdo para tu comida diaria o para tus carnes asadas del fin de semana, recuerda que la carne se compra en Bif.</p>
                    <div class="red-divider"></div>
                    <a href="#video-modal" class="section-header" data-toggle="modal" data-target="#video-modal">Ver&nbsp;&nbsp;&nbsp;&nbsp;Video</a>
                </div>
            </div>
            <img class="right hidden-xs" src="<?php echo bloginfo('template_url'); ?>/img/nosotros/right-meat.png">
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

    <!--/* CONCEPTO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="concepto" id="concepto">
        <h1 class="header text-center light-spacing">Concepto One Stop</h1>
        <div class="banner-divider">
            <div class="container vertical-align">
                <div class="row no-margin">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/dividers/one-stop.png" alt="One Stop" class="img-responsive vertical-align one-stop">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-7">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/dividers/sabias-que.png" alt="¿Sabías qué?" class="img-responsive">
                        <h3 class="text-justify">
                            En Bif tienes todo en un solo lugar. Milanesas, molida, pechugas, deshebrada, hamburguesas y carne para tacos. Además de verduras, quesos y  carnes frías. Con un servicio rápido, práctico y con atención personalizada.
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
        <h1 class="header">Guía Experto BIF</h1>
    </div>
    <div class="guia text-center">
        <div class="row no-margin">
            <div class="container spacing">
                <div class="col-md-2 col-sm-4">
                    <a href="#chuleton" data-toggle="modal" data-target="#chuleton">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url'); ?>/img/guia/1.png" alt="Chuletón" class="img-responsive">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/img/guia/2.png" alt="Diezmillo" class="img-responsive">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/img/guia/3.png" alt="T-Bone" class="img-responsive">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/img/guia/4.png" alt="Top Sirloin" class="img-responsive">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/img/guia/5.png" alt="New York" class="img-responsive">
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
                            <img src="<?php echo bloginfo('template_url'); ?>/img/guia/6.png" alt="Rib Eye" class="img-responsive">
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
                                <div class="description bg-orange">
                                    <h2 class="white">DESCRIPCIÓN</h2>
                                </div>
                                <p class="white">
                                    - Magro, suave y lleno de sabor.
                                    <br><br>
                                    - Cocción rápida,terso con textura robusta.
                                </p>
                                <img class="center-block img-responsive cow" src="<?php echo bloginfo('template_url'); ?>/img/infografia/cow-ny.png" alt="Vaca">
                            </div>
                            <div class="col-sm-7">
                                <h1 class="big-header white text-center">= NEW YORK =</h1>
                                <img class="center-block img-responsive main-img" src="<?php echo bloginfo('template_url'); ?>/img/infografia/new-york.png" alt="New York">
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
    <div class="modal fade infografia" id="top-sirloin" role="dialog">
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
                                    Versátil, jugoso y se le conoce como top sirloin al corte redondeado que contiene la picaña.
                                    <br><br>
                                    No tiene hueso y tiene poca grasa.
                                </p>
                                <img class="center-block img-responsive cow" src="<?php echo bloginfo('template_url'); ?>/img/infografia/cow-ts.png" alt="Vaca">
                            </div>
                            <div class="col-sm-7">
                                <h1 class="big-header white text-center">= TOP SIRLOIN =</h1>
                                <img class="center-block img-responsive main-img" src="<?php echo bloginfo('template_url'); ?>/img/infografia/top-sirloin.png" alt="Top Sirloin">
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
    <div class="modal fade infografia" id="rib-eye" role="dialog">
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
                                    Versátil, jugoso y se le conoce como top sirloin al corte redondeado que contiene la picaña.
                                    <br><br>
                                    No tiene hueso y tiene poca grasa.
                                </p>
                                <img class="center-block img-responsive cow" src="<?php echo bloginfo('template_url'); ?>/img/infografia/cow-rib.png" alt="Vaca">
                            </div>
                            <div class="col-sm-7">
                                <h1 class="big-header white text-center">= RIB EYE =</h1>
                                <img class="center-block img-responsive main-img" src="<?php echo bloginfo('template_url'); ?>/img/infografia/rib-eye.png" alt="Rib Eye">
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
    <div class="modal fade infografia" id="t-bone" role="dialog">
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
                                    Es un corte muy popular, una de sus presentaciones es en la porción de lomo la cual le da un delicioso sabor y una excelente textura.
                                </p>
                                <img class="center-block img-responsive cow" src="<?php echo bloginfo('template_url'); ?>/img/infografia/cow-tbone.png" alt="Vaca">
                            </div>
                            <div class="col-sm-7">
                                <h1 class="big-header white text-center">= T BONE =</h1>
                                <img class="center-block img-responsive main-img" src="<?php echo bloginfo('template_url'); ?>/img/infografia/t-bone.png" alt="T-Bone">
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
    <div class="modal fade infografia" id="chuleton" role="dialog">
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
                                    Este corte es conocido por ser uno de los más jugosos y rebosantes de sabor, está considerado entre los cortes más suaves que se pueden encontrar en al carne de res.
                                </p>
                                <img class="center-block img-responsive cow" src="<?php echo bloginfo('template_url'); ?>/img/infografia/cow-chuleton.png" alt="Vaca">
                            </div>
                            <div class="col-sm-7">
                                <h1 class="big-header white text-center">= CHULETÓN =</h1>
                                <img class="center-block img-responsive main-img" src="<?php echo bloginfo('template_url'); ?>/img/infografia/chuleton.png" alt="Chuletón">
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
    <div class="modal fade infografia" id="diezmillo" role="dialog">
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
                                    Proviene del cuarto delantero de la res, entre el lomo y las costillas, su uso común es en asados.
                                </p>
                                <img class="center-block img-responsive cow" src="<?php echo bloginfo('template_url'); ?>/img/infografia/cow-diezmillo.png" alt="Vaca">
                            </div>
                            <div class="col-sm-7">
                                <h1 class="big-header white text-center">= DIEZMILLO =</h1>
                                <img class="center-block img-responsive main-img" src="<?php echo bloginfo('template_url'); ?>/img/infografia/diezmillo.png" alt="Diezmillo">
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MARINAR  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner-divider marinar">
        <div class="container vertical-align">
            <div class="row">
                <div class="col-sm-5 col-xs-4"></div>
                <div class="col-sm-7 col-xs-8">
                    <h1 class="header text-center">¡Aquí te lo Marinamos!</h1>
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
            <h1 class="header">Productos</h1>
            <div class="row no-margin">
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/barbacoa.jpg" alt="Barbacoa">
                    </div>
                    <div class="header-container bg-brown"><h2 class="section-header vertical-align">Barbacoa</h2></div>
                    <p class="text">
                        Barbacoa calientita los fines de semana <!--¡Ya lista para llevar!-->¡lista para llevar!<br>
                        De cachete, norteña y light.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/res.jpg" alt="Res">
                    </div>
                    <div class="header-container bg-orange"><h2 class="section-header vertical-align">Res</h2></div>
                    <p class="text">
                        <!--Diferentes cortes de carne como los Cortes Jr. que son cortes finos de lomo de res más delgados, por lo que se cocinan más rápido y son la porción exacta para tus hijos.<br>-->
                        Milanesa, Molida, Pulpa para Taquitos, Filete, Discada, todo para tu comida del diario.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/cortes.jpg" alt="Cortes Especiales">
                    </div>
                    <div class="header-container bg-green"><h2 class="section-header vertical-align">Cortes</h2></div>
                    <p class="text">
                        Cortes finos, New York, Rib eye, T bone, Top Sirloin, Picaña.
                    </p>
                </div>
            </div>
            <div class="row no-margin">
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/cortes-finos.jpg" alt="Carnes Frías">
                    </div>
                    <div class="header-container bg-yellow"><h2 class="section-header vertical-align">Carnes Frías y Quesos</h2></div>
                    <p class="text">
                        <!--Gran variedad en quesos menonitas y carnes frías.-->
                        Gran variedad de quesos menonitas y carnes frías Sabori.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/pollo.jpg" alt="Pollo">
                    </div>
                    <div class="header-container bg-gold"><h2 class="section-header vertical-align">Pollo</h2></div>
                    <p class="text">
                        Pechugas,  milanesa, alitas picosas, piernita enchilada y la línea light con pollo totalmente desgrasado.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/cerdo.jpg" alt="Cerdo">
                    </div>
                    <div class="header-container bg-purple"><h2 class="section-header vertical-align">Cerdo</h2></div>
                    <p class="text">
                        Chuleta ahumada, pierna, lomo.
                    </p>
                </div>
            </div>
            <div class="row no-margin">
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/pescado.jpg" alt="Pescado">
                    </div>
                    <div class="header-container bg-blue"><h2 class="section-header vertical-align">Pescado</h2></div>
                    <p class="text">
                        Filete tilapia, medallones de atún.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/productos-reg.jpg" alt="Productos Regionales">
                    </div>
                    <div class="header-container bg-light-green"><h2 class="section-header vertical-align">Productos Regionales</h2></div>
                    <p class="text">
                        Nueces finas, tortillas de harina, carne seca Y dulces regionales.
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/productos/cocina-facil.jpg" alt="Cocina Fácil">
                    </div>
                    <div class="header-container bg-dark-blue"><h2 class="section-header vertical-align">Cocina Fácil</h2></div>
                    <p class="text">
                        Hamburguesas, Brochetas, Pizza, Lasaña y Espagueti.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BARBACOA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner-divider barbacoa">
        <div class="container vertical-align">
            <img class="img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/dividers/barbacoa-caption.png" alt="La Mejor Barbacoa">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PARALLAX SERVICIO AL CLIENTE  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="servicio">
        <div class="parallax-container">
            <div class="parallax"><img src="<?php echo bloginfo('template_url'); ?>/img/servicio/bg.jpg" alt=""></div>
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
            <h1 class="header">Contáctanos</h1>
            <div class="col-sm-6 border-right">
                <img src="<?php echo bloginfo('template_url'); ?>/img/icons/phone.png" alt="Teléfono">
                <p class="text">
                    Para atención especial a nuestros clientes
                </p>
                <p class="orange">
                    01 800 627.7634
                </p>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo bloginfo('template_url'); ?>/img/icons/mail.png" alt="Correo Electrónico">
                <p class="text">
                    O bien por correo electrónico
                </p>
                <p class="orange">
                    experto@bif.com.mx
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>