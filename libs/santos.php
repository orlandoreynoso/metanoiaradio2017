
<?php 
/*
$page_actually = 26;
$perpage_actually = 10;
$day = $perpage_actually-1; */

// $the_query = new WP_Query(create_santo($page_actually,$perpage_actually)); 

?>

<?php 

/*

$the_query  = query_posts( 
	array( 
		'cat' => 26, 
		'posts_per_page' => 4, 
		'orderby' => 'title', 
		'order' => 'DESC' )
	);

 while ( have_posts() ) : the_post(); ?>
<div class="actual col-xs-12 col-md-3">
    <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
    <div class="label">
    	<div class="ic-1">
    		<!-- i class="icon-file fa fa-file"></i -->
    		<div class="cat">
    			<a href="<?php the_permalink(); ?>" ><?php the_category(' , '); ?></a>
    		</div>
    	</div>
    </div>
    <div class="exe"><?php the_excerpt(); ?> </div>
</div>
<?php
endwhile;
 
wp_reset_query();  */

 ?>