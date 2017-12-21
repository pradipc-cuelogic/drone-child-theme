<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Drone_WP_Theme
 * @since 1.0
 * @version 1.0
 */

?>

<nav id="site-navigation" class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            
            <div class="brand-wrap">
                <a class="brand" href="<?php echo site_url(); ?>">
                    <!-- <?php bloginfo('name'); ?> -->
                    <span class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg">
                </span>
                    <span class="logo-inverse">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-inverse.svg">
                </span>
                </a>
            </div>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',
			) ); ?>
			<a href="javascript:void(0);" class="btn btn-primary sign-up-btn">Sign Up</a>
		</div>
        <button type="button" class="navbar-toggle collapsed bottom-nav-btn" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></button>
	</div>
</nav><!-- #site-navigation -->
