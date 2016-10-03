<?php $current_page = 'recetas'; ?>
<?php get_header(); ?>
<div class="wrapper page-recetas">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner">
        <!--<div class="banner-top container">
            <div class="vertical-align contact-info pull-right">
                <p>
                    <span class="white"><img src="img/icons/email.png" alt="">experto@bif.com.mx</span>
                    <span class="white"><img src="img/icons/telephone.png" alt="">01 800 627.7634</span>
                </p>
            </div>
        </div>-->
        <div class="vertical-align">
            <h1 class="section-header text-center">Recetas Bif</h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECETAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="container spacing text-center">
        <?php 
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );

        foreach ($categories as $category) {
            switch($category->term_id) {
                    //RES
                case 2:
                    $background = 'bg-orange';
                    break;
                    //POLLO
                case 3:
                    $background = 'bg-gold';
                    break;
                    //CERDO
                case 4:
                    $background = 'bg-purple';
                    break;
                    //BARBACOA
                case 5:
                    $background = 'bg-brown';
                    break;
                    //CORTES
                case 6:
                    $background = 'bg-green';
                    break;
                    //CARNES FRÍAS Y QUESOS
                case 7:
                    $background = 'bg-yellow';
                    break;
                    //PESCADO
                case 8:
                    $background = 'bg-blue';
                    break;
                    //PRODUCTOS REGIONALES
                case 9:
                    $background = 'bg-light-green';
                    break;
                    //COCINA FÁCIL
                case 10:
                    $background = 'bg-dark-blue';
                    break;
                default:
                    break;
            }
        ?>
        <div class="recipe-divider <?php echo $background; ?>">
            <div class="section-header"><?php echo $category->name; ?></div>
        </div>
        <div class="row no-margin">
            <?php
            query_posts('cat='.$category->term_id);
            while (have_posts()) : the_post();
            if($the_post_name != get_the_title()) {
            ?>
            <div class="col-sm-4 center-block">
                <a href="<?php echo get_the_permalink(); ?>">
                    <img class="img-responsive center-block" src="<?php echo CFS()->get('img');?>" alt="<?php echo get_the_title(); ?>">
                    <h3 class="header"><?php echo get_the_title(); ?></h1>
                    <img class="timer" src="<?php echo bloginfo('template_url'); ?>/img/page-recetas/timer.png" alt=""><p class="text pink time">Queda lista en <?php echo CFS()->get('time');?>.</p>
                </a>
                <a href="<?php echo get_the_permalink(); ?>" class="recipe-link section-header <?php echo $background; ?> center-block">Ver Receta</a>
            </div>
            <?php
            }
            endwhile;
            ?>
        </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>