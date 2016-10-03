<?php $current_page = 'recetas'; ?>
<?php get_header(); ?>
<div class="wrapper page-recetas page-receta">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner">
        <!--<div class="banner-top container">
            <div class="vertical-align contact-info pull-right">
                <p>
                    <span class="white"><img src="<?php echo bloginfo('template_url'); ?>/img/icons/email.png" alt="">experto@bif.com.mx</span>
                    <span class="white"><img src="<?php echo bloginfo('template_url'); ?>/img/icons/telephone.png" alt="">01 800 627.7634</span>
                </p>
            </div>
        </div>-->
        <div class="vertical-align">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECETAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="container spacing">
        <?php
        $the_post_name = '';
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                $category = get_the_category();
                $firstCategory = $category[0]->cat_name;
                $categoryID = $category[0]->cat_ID;
                $the_post_name = get_the_title();
        ?>

        <div class="row no-margin">
            <div class="col-sm-6 img-container">
                <img src="<?php echo CFS()->get('img');?>" alt="<?php echo get_the_title(); ?>">
                <div class="header-container <?php 
                switch($categoryID) {
                        //RES
                    case 2:
                        echo 'bg-orange';
                        break;
                        //POLLO
                    case 3:
                        echo 'bg-gold';
                        break;
                        //CERDO
                    case 4:
                        echo 'bg-purple';
                        break;
                        //BARBACOA
                    case 5:
                        echo 'bg-brown';
                        break;
                        //CORTES
                    case 6:
                        echo 'bg-green';
                        break;
                        //CARNES FRÍAS Y QUESOS
                    case 7:
                        echo 'bg-yellow';
                        break;
                        //PESCADO
                    case 8:
                        echo 'bg-blue';
                        break;
                        //PRODUCTOS REGIONALES
                    case 9:
                        echo 'bg-light-green';
                        break;
                        //COCINA FÁCIL
                    case 10:
                        echo 'bg-dark-blue';
                        break;
                    default:
                        break;
                } ?>">
                    <h1 class="section-header"><?php echo $firstCategory; ?></h1>
                </div>
            </div>
            <div class="col-sm-6">
                <h3 class="header recipe-title"><?php echo get_the_title(); ?></h1>
                <img class="timer" src="<?php echo bloginfo('template_url'); ?>/img/page-recetas/timer.png" alt=""><p class="text pink time">Queda lista en <?php echo CFS()->get('time');?>.</p>
                <p class="text">
                    Ingredientes:
                    <br><br>
                    <?php echo CFS()->get('ingredientes');?>
                </p>
            </div>
        </div>
        <div class="row no-margin">
            <div class="col-sm-12">
                <p class="text">
                    Pasos:
                    <br><br>
                    <?php echo the_content(); ?>
                </p>
            </div>
        </div>

        <?php
            }
        }
        ?>
        <div class="row no-margin text-center">
            <?php
            $counter = 0;
            query_posts('cat='.$categoryID.'&orderby=rand');
            while (have_posts()) : the_post();
            if($the_post_name != get_the_title() && $counter != 3) {
            ?>
            <div class="col-sm-4 center-block">
                <a href="<?php echo get_the_permalink(); ?>">
                    <img class="img-responsive center-block" src="<?php echo CFS()->get('img');?>" alt="<?php echo get_the_title(); ?>">
                    <h3 class="header"><?php echo get_the_title(); ?></h1>
                    <img class="timer" src="<?php echo bloginfo('template_url'); ?>/img/page-recetas/timer.png" alt=""><p class="text pink time">Queda lista en <?php echo CFS()->get('time');?>.</p>
                </a>
            </div>
            <?php
                $counter++;
            }
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>