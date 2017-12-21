<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article <?php if(!is_single()) { ?> class="item" <?php } ?> id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<?php if ( '' !== get_the_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>
<!-- 		<div class="category-name">
	    <?php     //echo $categories_list = get_the_category_list( ', ' ); ?>
	  	</div> -->
	
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta dateWrap">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			if (is_single()){
			echo '<ul class="list-inline socialLink">';
			if (get_comments_number() != 0 ){
			echo '<li>';
			echo get_comments_number();
			echo ' Comments</li>';
			}
			echo '<li> Share';
			echo do_shortcode("[feather_share]");
			echo '</li></ul>';
			}
			echo '</div>';
		};

		?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		
		<?php
		/* translators: %s: Name of current post */
		if ( is_single() ) {
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );
		?>
		<div class="footerPostInfo"><span class="byline">By <?php echo get_the_author(); ?></span> <?php if (get_comments_number() != 0 ){ ?> <span><?php echo get_comments_number();?> Comments</span> <?php } ?></div>
		<?php
		}
		else {
			the_excerpt(); 
		}
		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
