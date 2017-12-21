<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container ">
<!-- 	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?> -->
	<div class="container-fluid  padding-none"><?php require ( get_theme_file_path().'/template-parts/post/top-nav-categories.php' ); ?></div>
	<div id="primary"  class="<?php if(!is_single()) { ?>full-width<?php } ?> content-area post-wrapper">
		<main id="main" class="site-main" role="main">
			<?php //echo do_shortcode("[carousel_composer id='2110']"); 

			$args = array(
		    'numberposts' => 1,
		    'offset' => 0,
		    'category' => 0,
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'include' => '',
		    'exclude' => '',
		    'meta_key' => '',
		    'meta_value' =>'',
		    'post_type' => 'post',
		    'post_status' => 'publish',
		    'suppress_filters' => true
		   );

   $recentPosts = wp_get_recent_posts( $args, ARRAY_A );
   if($recentPosts) {
   	echo '<div class="recentPostWrap">';
    $recentPostId = get_the_ID();
    if( get_the_post_thumbnail_url() ) {
     	echo get_the_post_thumbnail( get_the_ID(), $size = 'post-thumbnail', $attr = '' );
    }
    echo '<div class="captionWrapMain"><div class="captionWrap"><div class="captionWrapInner"><div class="caption">';
    echo the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    echo  twentyseventeen_time_link();
    echo '</div></div></div></div>';
   }
   echo '</div>';
			 ?>
			<div class="masonry">
			<?php

   if ( have_posts() ) :
    while ( have_posts() ) : the_post();

     /*
      * Include the Post-Format-specific template for the content.
      * If you want to override this in a child theme, then include a file
      * called content-___.php (where _ is the Post Format name) and that will be used instead.
      */
     if($recentPostId != get_the_ID() && ! is_single())
     get_template_part( 'template-parts/post/content', get_post_format() );

    endwhile;
   else :
			
				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
			</div>
			<?php
			if ( have_posts() ) :

				the_posts_pagination( array(
					'prev_text' => '<span class="screen-reader-text">' . __( '<i class="fa fa-angle-left" aria-hidden="true"></i>', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( '<i class="fa fa-angle-right" aria-hidden="true"></i>', 'twentyseventeen' ) . '</span>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

		endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
