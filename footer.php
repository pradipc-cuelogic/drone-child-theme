<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
    </div>
    <!-- #content -->
    <footer id="colophon" role="contentinfo">        
        <!-- .wrap -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <a href="<?php echo site_url(); ?>">
                        <img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-inverse.svg">
                    </a>
                </div>
                <div class="col-md-7 col-sm-6">
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'footer-menu', 
                        'container_class' => 'footer-menu-container' ) ); 
                    ?>
                        <!-- <ul>
                    <li>
                        <a href="#">News</a><br>
                        <a href="#">Help Center</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a><br>
                        <a href="#">Careers</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a><br>
                        <a href="#">Terms</a>
                    </li>
                </ul> -->
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="social-link">
                        <a href="https://www.facebook.com/DroneInsuranceCom/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/DroneInsuranceC" target="_blank"><i class="fa fa-twitter"></i></a>
                        <!-- <a href="https://www.instagram.com/droneinsurancecom/" target="_blank"><i class="fa fa-instagram"></i></a> -->
                        <a href="https://www.linkedin.com/company/droneinsurance/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center copyright">Insurance services provided by Acend Insurance Solutions, <span>LLC ©DroneInsurance.com 2017</span></div>
        </div>
    </footer>
    <!-- #colophon -->
    </div>
    <!-- .site-content-contain -->
    </div>
    <!-- #page -->
    <?php wp_footer(); ?>
    </body>

    </html>