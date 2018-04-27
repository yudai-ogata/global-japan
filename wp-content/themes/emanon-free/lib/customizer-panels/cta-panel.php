<?php
/**
* Theme Emanon Free customizer cta panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* CTA settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_cta_settings', array(
	'priority' => 60,
	'capability' => 'edit_theme_options',
	'title' => __( 'CTA settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Display cta option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_display_options', array (
			'title' => __( 'Display cta option', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_cta_settings',
		) );

			// Display CTA single
			$wp_customize->add_setting( 'display_cta_single', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_single', array(
				'label'	 => __( 'Display single cta', 'emanon' ),
				'section' => 'emanon_cta_display_options',
				'settings' => 'display_cta_single',
				'type' => 'checkbox',
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Calls to action for common option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_common_options', array (
			'title' => __( 'Calls to action for common option', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_cta_settings',
		) );

			// CTA layout type
			$wp_customize->add_setting( 'cta_common_layout_type', array(
				'default' => 'cta_post_left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_cta_post_layout_type',
			) );
			$wp_customize->add_control( 'cta_common_layout_type', array(
				'label' => __( 'CTA layout type', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_layout_type',
				'type' => 'radio',
				'choices' => array(
					'cta_post_left' => __( 'CTA left layout', 'emanon' ),
					'cta_post_center' => __( 'CTA center layout', 'emanon' ),
					'cta_post_right' => __( 'CTA right layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// CTA common image
			$wp_customize->add_setting( 'cta_common_image', array(
				'default' => '',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_common_image', array (
				'label' => __( 'CTA image', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_image',
				'type' => 'image',
				'priority' => 2,
			) ) );

			// CTA common title
			$wp_customize->add_setting( 'cta_common_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_common_title', array(
				'label' => __( 'CTA title', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA common text
			$wp_customize->add_setting( 'cta_common_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_common_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_text',
				'type' => 'text',
				'priority' => 4,
			) ) );

			// CTA common btn url
			$wp_customize->add_setting( 'cta_common_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_url',
			) );
			$wp_customize->add_control( 'cta_common_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA common btn text
			$wp_customize->add_setting( 'cta_common_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_common_btn_text', array(
				'label' => __( 'CTA button text', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA contact form7
			$wp_customize->add_setting( 'cta_common_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_common_contactform7', array(
				'label' => __( 'CTA Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA common background color
			$wp_customize->add_setting( 'cta_common_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_background_color', array(
				'label' => __( 'CTA background color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_background_color',
				'priority' => 8,
			) ) );

			// CTA common title color
			$wp_customize->add_setting( 'cta_common_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_title_color', array(
				'label' => __( 'CTA title color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_title_color',
				'priority' => 9,
			) ) );

			// CTA common text color
			$wp_customize->add_setting( 'cta_common_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_text_color', array(
				'label' => __( 'CTA text color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_text_color',
				'priority' => 10,
			) ) );

			// CTA common button background color
			$wp_customize->add_setting( 'cta_common_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_btn_background_color', array(
				'label' => __( 'CTA button background color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_background_color',
				'priority' => 11,
			) ) );

			// CTA common button text color
			$wp_customize->add_setting( 'cta_common_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_common_btn_text_color', array(
				'label' => __( 'CTA button text color', 'emanon' ),
				'section' => 'emanon_cta_common_options',
				'settings' => 'cta_common_btn_text_color',
				'priority' => 12,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to action for potential option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_potential_options', array (
			'title' => __( 'Calls to action for potential option', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_cta_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_cta_potential', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_cta_function( $wp_customize, 'display_cta_potential', array(
				'section' => 'emanon_cta_potential_options',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to action for eventually option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_eventually_options', array (
			'title' => __( 'Calls to action for eventually option', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_cta_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_cta_eventually', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_cta_function( $wp_customize, 'display_cta_eventually', array(
				'section' => 'emanon_cta_eventually_options',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to action for compare option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_compare_options', array (
			'title' => __( 'Calls to action for compare option', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_cta_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_cta_compare', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_cta_function( $wp_customize, 'display_cta_compare', array(
				'section' => 'emanon_cta_compare_options',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to action for prospect option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_prospect_options', array (
			'title' => __( 'Calls to action for prospect option', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_cta_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_cta_prospect', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_cta_function( $wp_customize, 'display_cta_prospect', array(
				'section' => 'emanon_cta_prospect_options',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Cta footer section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_footer_section', array (
			'title' => __( 'CTA footer section settings', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_cta_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_cta_footer', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_cta_function( $wp_customize, 'display_cta_footer', array(
				'section' => 'emanon_cta_footer_section',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls to action popup
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_popup_options', array (
			'title' => __( 'Calls to action popup option', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_cta_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_cta_popup', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_cta_function( $wp_customize, 'display_cta_popup', array(
				'section' => 'emanon_cta_popup_options',
				'priority' => 1,
			) ) );