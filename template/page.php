<article  id="contenido" class="grid">
    <div id="m-iz">
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
            <?php include TEMPLATEPATH.'/libs/anuncios.php' ?>                    
        </div>                 
    </div>

    <div id="m-der">
			<div id="titulo">
				<div class="mapeo"><?php the_breadcrumb(); ?></div>
			</div>    

    		<div id="descripcion_categoria">
			<div id="name_cat">
			<!-- span>&nbsp;</span -->
			<!-- a class="cat"><?php the_category (); ?></a -->
			</div>    
			<div id="fecha">
			<span class="icon">&raquo;</span>    
			<span class="date"><?php the_time('j F, Y'); ?></span>  
			</div>
			</div>

            <div id="m-entradas-home">

            <?php // echo 'PAGE'; ?>                        
            <?php

            while ( have_posts() ) : the_post();
            //          get_template_part( 'content', 'page' );
            the_content();           
            endwhile;

            ?>
            <?php // comments_template(); ?>
            <!-- address>Por <?php the_author_posts_link() ?></address -->


            </div>                 

        
    </div>
    
</article>     


