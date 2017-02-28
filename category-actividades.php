<?php 

/*
  Template Name: actividades
  Template Post Type: post, page, product
*/

 get_header();

?>

<section class="con-programas">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-12 con">
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
              <div class="row">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

              <div class="contenido col-sm-6 col-md-6">
                    <div class="thumb">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>              
                    </div>
              </div>   


          <?php endwhile; ?>
              </div>          
          <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
          <?php else : ?>
          <p><?php _e('Ups!, no hay entradas.'); ?></p>
          <?php endif; ?>
       </div>
    </div>
  </div>
  
</section>

<?php get_footer();  ?>