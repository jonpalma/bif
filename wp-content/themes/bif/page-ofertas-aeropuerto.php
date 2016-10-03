<?php $current_page = 'ofertas'; ?>

  <?php get_header(); ?>

  <!-- PAGE -->
    <br><br><br><br>
    <div class="container"> 
      <div class="row"> 
        <div class="col-md-12 col-sm-9">
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
           <div class="col-md-12 col-sm-6 " class="img-responsive">
              <?php the_content(); ?>  </div>

           
          <?php endwhile; else: ?>
             <h1>No se encontraron articulos</h1>
          <?php endif; ?>
      
        </div>
      </div> 
    </div> 
    <!-- END / PAGE -->

<?php get_footer(); ?>