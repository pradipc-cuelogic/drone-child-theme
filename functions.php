<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
	 wp_enqueue_script('validate', get_theme_file_uri( '/assets/js/jquery.validate.min.js'), array( 'jquery' ), false, true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'touchJS', get_theme_file_uri( '/assets/js/jquery.touchSwipe.min.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'scrollbar', get_theme_file_uri( '/assets/js/jquery.mCustomScrollbar.js' ), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), '1.0', true );
}

// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'footer-menu' => __( 'Footer Menu', 'twentyseventeen' )
	) );

// Added by Prashant.. Original has been commented in Parent theme. Take care while upgrading
//require ( get_theme_file_path().'/inc/template-tags.php' );


if ( ! function_exists( 'twentyseventeen_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function twentyseventeen_entry_footer() {

	/* translators: used between list items, there is a space after the comma */
	$separate_meta = __( ', ', 'twentyseventeen' );

	// Get Categories for posts.
	$categories_list = get_the_category_list( $separate_meta );

	// Get Tags for posts.
	$tags_list = get_the_tag_list( ' ' ,  ' ' );

	// We don't want to output .entry-footer if it will be empty, so make sure its not.
	if ( ( ( twentyseventeen_categorized_blog() && $categories_list ) || $tags_list ) || get_edit_post_link() ) {

		echo '<footer class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if ( ( $categories_list && twentyseventeen_categorized_blog() ) || $tags_list ) {
					echo '<span class="cat-tags-links">';

						// Make sure there's more than one category before displaying.
						if ( $categories_list && twentyseventeen_categorized_blog() ) {
							echo '<span class="cat-links">' . twentyseventeen_get_svg( array( 'icon' => 'folder-open' ) ) . '<span class="screen-reader-text">' . __( 'Categories', 'twentyseventeen' ) . '</span>' . $categories_list . '</span>';
						}

						if ( $tags_list && ! is_wp_error( $tags_list ) ) {
							echo '<span class="tags-links">' . twentyseventeen_get_svg( array( 'icon' => 'hashtag' ) ) . '<span class="screen-reader-text">' . __( 'Tags', 'twentyseventeen' ) . '</span>' . $tags_list . '</span>';
						}

					echo '</span>';
				}
			}

			twentyseventeen_edit_link();

		echo '</footer> <!-- .entry-footer -->';
	}
}
endif;