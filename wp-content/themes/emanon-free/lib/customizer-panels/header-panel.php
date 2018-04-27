<?php
/**
* Theme Emanon Free Customizer Header Panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Header Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_header_settings', array(
	'priority' => 35,
	'capability' => 'edit_theme_options',
	'title' => __( 'Header settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Layout Design Options
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_design_options', array (
			'title' => __( 'Layout design', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_header_settings',
		) );

			// Header type
			$wp_customize->add_setting( 'header_layout_type', array(
				'default' => 'header-default',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_header_layout_type',
			) );
			$wp_customize->add_control( 'header_layout_type', array(
				'label' => __( 'Header layout type', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_layout_type',
				'type' => 'radio',
				'choices' => array(
					'header-default' => __( 'Header default layout', 'emanon' ),
					'header-center' => __( 'Header center layout', 'emanon' ),
					'header-line' => __( 'Header line layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Header area height
			$wp_customize->add_setting( 'header_area_height', array(
				'default' => 96,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_area_height', array(
				'label' => __( 'Header area height (default 96px)', 'emanon' ),
				'description' => __( 'Only header default layout and header center layout', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_area_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 2,
			) );

			// Header background image
			$wp_customize->add_setting( 'header_background_image', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_header_background_image( $wp_customize, 'header_background_image', array(
				'section' => 'emanon_header_design_options',
				'priority' => 3,
			) ) );

			// Header logo
			$wp_customize->add_setting( 'display_header_logo', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'display_header_logo', array (
				'label' => __( 'Display header logo', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'display_header_logo',
				'priority' => 4,
			) ) );

			// Header logo height
			$wp_customize->add_setting( 'header_logo_height', array(
				'default' => 50,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_logo_height', array(
				'label' => __( 'Header logo height (max 96px)', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_logo_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 96,
					'step' => 1,
				),
				'priority' => 5,
			) );

			// Header logo height for mobile
			$wp_customize->add_setting( 'header_logo_height_mobile', array(
				'default' => 50,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_logo_height_mobile', array(
				'label' => __( 'Header logo height for mobile (max 60px)', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_logo_height_mobile',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 60,
					'step' => 1,
				),
				'priority' => 6,
			) );

			// Header description background color
			$wp_customize->add_setting( 'header_description_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_description_background_color', array(
				'label' => __( 'Header description background color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_description_background_color',
				'priority' => 7,
			) ) );

			// Header description text color
			$wp_customize->add_setting( 'header_description_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_description_text_color', array(
				'label' => __( 'Header description text color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_description_text_color',
				'priority' => 8,
			) ) );

			// Header background color
			$wp_customize->add_setting( 'header_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
				'label' => __( 'Header background color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_background_color',
				'priority' => 9,
			) ) );

			// Header title color
			$wp_customize->add_setting( 'header_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_title_color', array(
				'label' => __( 'Header title color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_title_color',
				'priority' => 10,
			) ) );

			// Global nav color
			$wp_customize->add_setting( 'global_nav_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_nav_color', array(
				'label' => __( 'Nav color (Only line layout)', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'global_nav_color',
				'priority' => 11,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Global Nav Options
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_global_nav_options', array (
			'title' => __( 'Global nav', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_header_settings',
		) );

			// Global nav design type
			$wp_customize->add_setting( 'global_nav_design_type', array(
				'default' => 'default',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_global_nav_design_type',
			) );
			$wp_customize->add_control( 'global_nav_design_type', array(
				'label' => __( 'Global nav design type', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'global_nav_design_type',
				'type' => 'radio',
				'choices' => array(
					'default' => __( 'Default type', 'emanon' ),
					'tracking' => __( 'Scroll tracking type', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Tracking header logo height
			$wp_customize->add_setting( 'tracking_header_logo_height', array(
				'default' => 40,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'tracking_header_logo_height', array(
				'label' => __( 'Header logo height (max 40px)', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'tracking_header_logo_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 40,
					'step' => 1,
				),
				'priority' => 2,
			) );

			// Display mobile nav
			$wp_customize->add_setting( 'display_mobile_nav', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_mobile_nav( $wp_customize, 'display_mobile_nav', array(
				'section' => 'emanon_global_nav_options',
				'priority' => 3,
			) ) );
