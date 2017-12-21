<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @subpackage Drone_WP_Theme
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyB0-xkgJBiO_2T2TCQzqJLD6X6VmiBJYD4"></script>
    <script type="text/javascript" >
        var geocoder;
        var days = 1;
        var date, expires;
        if (days) {
            date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            expires = "; expires="+date.toGMTString();
        } else {
            expires = "";
        }


        jQuery(document).ready(function($) {
        	function getCookie(cname) {
	            var name = cname + "=";
	            var ca = document.cookie.split(';');
	            for(var i=0; i<ca.length; i++) {
	                var c = ca[i];
	                while (c.charAt(0)==' ') c = c.substring(1);
	                if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
	            }
	            return "";
	        }
            function getReverseGeocodingData(lat, lng) {
                var latlng = new google.maps.LatLng(lat, lng);
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status !== google.maps.GeocoderStatus.OK) {
                        console.log(status);
                    }
                    // This is checking to see if the Geoeode Status is OK before proceeding
                    if (status == google.maps.GeocoderStatus.OK) {
                        jQuery.each(results[0].address_components, function (index, addressComponent) {
                            addressComponentType = addressComponent.types[0];
                                addressComponentShortName = addressComponent.short_name;
                                if (addressComponentType === 'country') {
                                    console.log("Country is : "+addressComponentShortName); 
                                    countryVal  =  addressComponentShortName ;                         
                                    document.cookie = "wp_country="+addressComponentShortName+expires;
                                }
                                if (addressComponentType === 'administrative_area_level_1') {
                                    console.log("State is : "+addressComponentShortName);
                                    stateVal = addressComponentShortName;
                                    document.cookie = "wp_state="+addressComponentShortName+expires;
                                }
                        }); 
                        //jQuery('#visit_location').show();
						//document.getElementById('visit_location').innerHTML = 'You are in '+stateVal+", "+countryVal; 
                        // var countryListVersion1 = ['CT', 'DE', 'HI', 'LA', 'NY', 'TN', 'TX', 'UT', 'WI', 'AL', 'AR', 'CO', 'DC', 'FL', 'GA', 'ID', 'IN', 'KS', 'ME', 'MD', 'MS', 'MO', 'MT', 'NE', 'NH', 'NM', 'NC', 'OR', 'RI', 'SD', 'VA', 'WY'];

                        var countryListVersion2 = ['AK', 'IA', 'KY', 'MI', 'MN', 'PA', 'VT', 'WA'];
                        var westVirginia = ['WV', 'MH'];

                        //jQuery('#visit_location').show();
                        //document.getElementById('visit_location').innerHTML = 'You are in '+stateVal+", "+countryVal;
                       
                        if(jQuery.inArray(stateVal, countryListVersion2) !== -1 && countryVal === 'US'){
                            jQuery(".liberty-well").removeClass('text-center');
                            jQuery(".liberty-well").addClass('with-logo');
                        }
                        if(jQuery.inArray(stateVal, westVirginia) !== -1 && countryVal === 'US'){
                            jQuery("body").css('overflow','hidden');
                            jQuery(".westVirginia").show();
                            jQuery(".custom-auth-modal").css("display","flex");
                        }
                    }
                });
            }            
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
            function showPosition(position) {
                lat = position.coords.latitude;
                lng = position.coords.longitude;
                if(getCookie("wp_country") == "") {
                	getReverseGeocodingData(lat, lng);
                
            } else {
            	console.log("countryvalue already present=>"+getCookie("wp_country"));
            	var stateVal = getCookie("wp_state");
            	var countryVal = getCookie("wp_country");

                // var countryListVersion1 = ['CT', 'DE', 'HI', 'LA', 'NY', 'TN', 'TX', 'UT', 'WI', 'AL', 'AR', 'CO', 'DC', 'FL', 'GA', 'ID', 'IN', 'KS', 'ME', 'MD', 'MS', 'MO', 'MT', 'NE', 'NH', 'NM', 'NC', 'OR', 'RI', 'SD', 'VA', 'WY'];

                var countryListVersion2 = ['AK', 'IA', 'KY', 'MI', 'MN', 'PA', 'VT', 'WA'];
                var westVirginia = ['WV', 'MH'];

				//jQuery('#visit_location').show();
				//document.getElementById('visit_location').innerHTML = 'You are in '+stateVal+", "+countryVal;
               
                if(jQuery.inArray(stateVal, countryListVersion2) !== -1 && countryVal === 'US'){
                    jQuery(".liberty-well").removeClass('text-center');
                    jQuery(".liberty-well").addClass('with-logo');
                }
                if(jQuery.inArray(stateVal, westVirginia) !== -1 && countryVal === 'US'){
                    jQuery("body").css('overflow','hidden');
                    jQuery(".westVirginia").show();
                    jQuery(".custom-auth-modal").css("display","flex");
                }
            }
        }
        }); 
    </script>
</head>

<body <?php body_class(); ?>>
<div class="custom-auth-modal westVirginia">
    <div class="custom-auth-modal-content-wrap">
        <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-inverse.svg" alt="Drone Insurance">
        <p>
            By clicking Confirm, you are expressing interest in on-demand flight coverage for your drone(s) and confirm that you previously learned about drone insurance products from a West Virginia licensed producer.
        </p>
        <p class="padding-none btn-wrapper">
            <a class="btn btn-lg btn-primary inverse lg-width" href="javascript:void(0);"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Do not continue</a>
            <a class="btn btn-lg btn-primary lg-width" href="javascript:void(0);">Confirm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </p>
    </div>
</div>
<div id="DisplayData"></div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">		
		<?php if ( has_nav_menu( 'top' ) ) : ?>
		<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
		<?php endif; ?>
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

	</header><!-- #masthead -->
	<div class="site-content-contain">
		<div id="content" class="site-content padding-none">