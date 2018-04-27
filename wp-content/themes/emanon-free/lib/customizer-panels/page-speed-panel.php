<?php
/**
* Theme Emanon Pro Customizer Page Speed Panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/

	/*------------------------------------------------------------------------------------
	/* Page Speed Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_page_speed_settings', array(
	'priority' => 75,
	'capability' => 'edit_theme_options',
	'title' => __( 'Page speed settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Optimized Jquery
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_jquery_optimized', array (
			'title' => __( 'Optimized jquery', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_page_speed_settings',
		) );

			// Put jquery at the bottom
			$wp_customize->add_setting( 'jquery_bottom', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'jquery_bottom', array(
				'label'	 => __( 'Put jquery at the bottom', 'emanon' ),
				'section' => 'emanon_jquery_optimized',
				'settings' => 'jquery_bottom',
				'type' => 'checkbox',
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Optimized CSS
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_css_optimized', array (
			'title' => __( 'Optimized CSS', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_page_speed_settings',
		) );

			// Lazy Load font-awesome.css
			$wp_customize->add_setting( 'font_awesome_lazyload', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'font_awesome_lazyload', array(
				'label' => __( 'Lazy Load font-awesome.css', 'emanon' ),
				'section' => 'emanon_css_optimized',
				'settings' => 'font_awesome_lazyload',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Minified style.css
			$wp_customize->add_setting( 'css_minified', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_compress( $wp_customize, 'css_minified', array(
				'section' => 'emanon_css_optimized',
				'priority' => 2,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Optimized HTML
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_html_optimized', array (
			'title' => __( 'Optimized HTML', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_page_speed_settings',
		) );

			// Minified HTML
			$wp_customize->add_setting( 'html_minified', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_compress( $wp_customize, 'html_minified', array(
				'section' => 'emanon_html_optimized',
				'priority' => 1,
			) ) );