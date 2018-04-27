<?php
/**
* Theme Emanon Free Customizer Footer Panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Footer Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_footer_settings', array(
	'priority' => 45,
	'capability' => 'edit_theme_options',
	'title' => __( 'Footer settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Layout Design Options
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_footer_design_options', array (
			'title' => __( 'Layout design', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_footer_settings',
		) );

			// Display top page btn
			$wp_customize->add_setting( 'display_top_page_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_top_page_btn', array(
				'label' => __( 'Display top page btn', 'emanon' ),
				'section' => 'emanon_footer_design_options',
				'settings' => 'display_top_page_btn',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display SNS follow botton in footer
			$wp_customize->add_setting( 'display_footer_sns_follow', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_footer_sns_follow( $wp_customize, 'display_footer_sns_follow', array(
				'section' => 'emanon_footer_design_options',
				'priority' => 2,
			) ) );