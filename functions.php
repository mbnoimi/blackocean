<?php
/**
 * Add the OceanWP Settings metabox in your CPT
 */
function oceanwp_metabox( $types ) {

	// Your custom post type
	$types[] = 'software';

	// Return
	return $types;

}
add_filter( 'ocean_main_metaboxes_post_types', 'oceanwp_metabox', 20 );

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','magnific-popup','slick','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION

