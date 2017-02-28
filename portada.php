<?php 
/*
Template Name: Portada
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>
<section class="c-portada">
  <article class="play">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <div class="playing">
                <?php include (TEMPLATEPATH . '/libs/playing.php'); ?>
            </div> 
        </div>
        <div class="col-md-6">
              <div class="m-reproductor">
                  <?php  include (TEMPLATEPATH . '/libs/rep.php'); ?>
              </div>    
        </div>
      </div>
    </div>    
  </article>

  <article class="short-description">
    <div class="container">
            <?php // echo  'estoy en portada MetanoiaRadio';      ?>    
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
              endwhile;
            ?>
      </div>
  </article>
  <article class="last">
    <div class="container">
      <h1>Entradas reciente</h1>
      <div class="recientes">
        <?php last_portada(); ?>
      </div>  
    </div>
  </article>
</section>

<?php get_footer(); ?>