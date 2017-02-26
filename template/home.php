        <article id="m-slide">
                <div class="slide-metanoia">
                 <?php // dynamic_sidebar('slide'); ?>
<?php 
    echo do_shortcode("[metaslider id=50]"); 
?>
                <?php // echo do_shortcode("[metaslider id=2677]");  ?>
                </div>
        </article>

        <article  id="contenido" class="grid">
            <div id="m-iz">
                <div class="friends">
                    <?php include TEMPLATEPATH.'/libs/anuncios.php' ?>          
		</div>	
                <div class="facebook">
                    <h1 class="titulo">Síguenos</h1>
                    <?php// dynamic_sidebar('facebook'); ?>
                    <?php include (TEMPLATEPATH.'/libs/facebook.php') ?>
                </div>  
                <div class="friends">
                    <h1 class="titulo">Enlaces de interes</h1>
                    <?php // dynamic_sidebar('friends'); ?>
                    <?php include TEMPLATEPATH.'/libs/friends.php' ?>
                </div> 
                <div class="friends">
                    <h1 class="titulo">Entradas recientes</h1>
                    <div id="recientes">
                        <?php ultimas_paginas(); ?>
                    </div>
                    <?php // dynamic_sidebar('friends'); ?>
                    <?php // include TEMPLATEPATH.'/libs/anuncios.php' ?>                    
                </div>                 
            </div>

            <div id="m-der">
                <div class="escuchar">
                    <h1 class="titulo">Dale play a MetanoiaRadio</h1>
                    <?php // echo 'Pagina Home'; ?>                    
                    <div id="m-reproductor">
                        <?php //dynamic_sidebar('player'); ?>  
                        <?php include (TEMPLATEPATH . '/libs/player.php'); ?>
                    </div>    
                    <div class="playing"><?php // dynamic_sidebar('playing'); ?>
                        <?php  //include (TEMPLATEPATH . '/libs/playing.php'); ?>
                    </div>              
                </div>
                <div id="m-entradas-home">
                        <h1 class="titulo">Noticias</h1>
                        <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                        // Include the page content template.
                        get_template_part( 'content', 'page' );
                        // End the loop.
                        endwhile;
                        ?>
                        <?php  the_content(); ?>                    
                </div> 
                
            </div>
            
        </article>     