<?php
/**
* Theme Emanon Free Customizer Landing Page Panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Landing Page Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_landing_page_settings', array(
	'priority' => 65,
	'capability' => 'edit_theme_options',
	'title' => __( 'Landing page settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Landing page section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_landing_page_section', array (
			'title' => __( 'Landing page settings', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display Landing page
			$wp_customize->add_setting( 'display_landing_page', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_landing_page( $wp_customize, 'display_landing_page', array(
				'section' => 'emanon_landing_page_section',
			) ) );
