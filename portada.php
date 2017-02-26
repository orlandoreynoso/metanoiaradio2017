<?php 
/*
Template Name: Portada
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/libs/menu.php'); ?>

<section class="t-1">
  <article class="logo">
    <img src="<?php echo IMAGES; ?>/metanoiaradio.png" alt="MetanoiaRadio.com">
  </article>
  <article class="titulos">
    <h1><span class="primary">Metanoia Radio:</span><span class="second">Música que Transforma</span></h1>
    
  </article>
  <article class="t-3">
            <?php // echo  'estoy en portada MetanoiaRadio';      ?>    
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
              endwhile;
            ?>

  </article>
  <article class="pongeplay">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><?php include (TEMPLATEPATH . '/libs/playing.php'); ?></div>
        <div class="col-md-6"><?php include (TEMPLATEPATH . '/libs/player.php'); ?></div>
      </div>
    </div>
    
  </article>
</section>


<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>


<section class="secciones-jtv">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article class="row">
				<?php include (TEMPLATEPATH . '/libs/secciones.php');  ?>
			</article>					
		</div>
	</div>
</div>	
</section>

<section class="con-general">

  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
          <div class="interiores">
          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
			    <div class="search"><?php  get_search_form(); ?></div>
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>

            <div class="recientes">
				<?php get_sidebar(); ?>
            </div>  
          </div>        
        </div>      
    </div>
  </div>
  
</section>


<?php get_footer(); ?>