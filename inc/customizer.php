<?php
/**
 * Experiment 324 Theme Customizer
 *
 * @package Experiment 324
 * @since Experiment 324 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since Experiment 324 1.2
 */
function experiment_324_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'experiment_324_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Experiment 324 1.2
 */
function experiment_324_customize_preview_js() {
	wp_enqueue_script( 'experiment_324_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'experiment_324_customize_preview_js' );
