<?php 
/*
  Template Name: santos-del-mes
  Template Post Type: post, page, product
*/
 get_header();
?>
<?php include (TEMPLATEPATH . '/libs/menu.php'); ?>
<section class="con-programas">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-12 con">
          <div class="titulo"><div class="mapeo"><?php the_breadcrumb(); ?></div></div>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 con">
          <div class="santos">
            <?php include(TEMPLATEPATH.'/libs/santosall.php'); ?>            
            <?php /*
            <?php cargar_santos(27,1); ?>
            <?php cargar_santos(28,1); ?>
            <?php cargar_santos(29,1); ?>
            <?php cargar_santos(30,1); ?>
            <?php cargar_santos(39,1); ?>
            <?php cargar_santos(40,1); ?>            
            <?php cargar_santos(33,1); ?>
            <?php cargar_santos(34,1); ?>
            <?php cargar_santos(35,1); ?>
            <?php cargar_santos(41,1); ?>
            <?php cargar_santos(36,1); ?>
            <?php cargar_santos(37,1); ?>            
            */ ?>            
          </div>                    
        </div> 
    </div>

    <?php /*
    <div class="row">
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/enero">Enero</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/febrero">Febrero</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/marzo">Marzo</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/abril">Abril</a></div>
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/mayo">Mayo</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/junio">Junio</a></div>    
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/julio">Julio</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/agosto">Agosto</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/septiembre">Septiembre</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/octubre">Octubre</a></div>
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/noviembre">Noviembre</a></div> 
      <div class="col-xs-6 col-md-2"><a href="<?php bloginfo('url'); ?>/category/santos-del-mes/diciembre">Diciembre</a></div>                               
    </div>    
      */ ?>
  </div>


</section>
<?php get_footer();  ?>