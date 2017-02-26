<?php /* 
<div id="menu">
    <ul>
        <li><a href="<?php bloginfo('url') ?>" >Portada</a></li>
        <?php
            $args25 = array (
              'child_of'            => 26,
              'current_category'    => 26,
              'depth'               => 0,
              'echo'                => 1,
              'exclude'             => '',
              'exclude_tree'        => '',
              'feed'                => '',
              'feed_image'          => '',
              'feed_type'           => '',
              'hide_empty'          => 1,
              'hide_title_if_empty' => false,
              'hierarchical'        => true,
              'order'               => 'ASC',
              'orderby'             => 'name',
              'separator'           => '<br />',
              'show_count'          => true,
              'show_option_all'     => '',
              'show_option_none'    => __( 'No categories' ),
              'style'               => 'list',
              'taxonomy'            => 'category',
              'title_li'            => __( 'Categories' ),
              'use_desc_for_title'  => 1,
            );
            wp_list_categories($args25);

            echo '<pre>';
            var_dump(wp_list_categories());
        ?>
    </ul>
</div>

*/ ?>
<?php 

$taxonomy = 'category';
 
// Get the term IDs assigned to post.
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
 
// Separator between links.
$separator = ', ';
 
if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
 
    $term_ids = implode( ',' , $post_terms );
 
    $terms = wp_list_categories( array(
        'title_li' => '',
        'style'    => 'none',
        'echo'     => false,
        'taxonomy' => $taxonomy,
        'include'  => $term_ids
    ) );
 
    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
 
    // Display post categories.
    echo  $terms;
}

 ?>

