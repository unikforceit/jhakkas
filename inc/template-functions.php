<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Jhakkas
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function jhakkas_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	 

	return $classes;
}
add_filter( 'body_class', 'jhakkas_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function jhakkas_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'jhakkas_pingback_header' );

/**
 * Custom styles. See customizer-typography for typography styles.
 */
function jhakkas_custom_styles() {
	echo '<style type="text/css">';

	 

	 

	echo '</style>';

}
add_action( 'wp_head', 'jhakkas_custom_styles' );

/***
 * Basic support for a custom mobile logo.
 */
function jhakkas_logo() {

	if ( has_custom_logo() ) {
		the_custom_logo();
	}

	 

}
