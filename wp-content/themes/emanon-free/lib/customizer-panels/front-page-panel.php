<?php
/**
* Theme Emanon Free Customizer Front Page Panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Front page settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_front_page_settings', array(
	'priority' => 50,
	'capability' => 'edit_theme_options',
	'title' => __( 'Front page settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* First View layout
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_firstview_layout', array (
			'title' => __( 'First View layout settings', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_front_page_settings',
		) );

			// Front sidebar layout
			$wp_customize->add_setting( 'firstview_layout', array(
				'default' => 'no_display',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_firstview_layout_type',
			) );
			$wp_customize->add_control( 'firstview_layout', array(
				'label' => __( 'First View layout type', 'emanon' ),
				'section' => 'emanon_firstview_layout',
				'settings' => 'firstview_layout',
				'type' => 'radio',
				'choices' => array(
					'no_display' => __( 'No display', 'emanon' ),
					'featured' => __( 'Featured', 'emanon' ),
					),
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Slider section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_slider_image', array (
			'title' => __( 'Slider section settings', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display slider section
			$wp_customize->add_setting( 'display_slider_section', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_slider_image( $wp_customize, 'display_slider_section', array(
				'section' => 'emanon_slider_image',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Slider Content Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_slider_content', array (
			'title' => __( 'Slider content section settings', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display slider_content section
			$wp_customize->add_setting( 'display_slider_content_section', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_slider_content_image( $wp_customize, 'display_slider_content_section', array(
				'section' => 'emanon_slider_content',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Featured Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_featured_section', array (
			'title' => __( 'Featured section settings', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_front_page_settings',
		) );

			// Featured article type
			$wp_customize->add_setting( 'featured_article_type', array(
				'default' => 'post',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_featured_article_type',
			) );
			$wp_customize->add_control( 'featured_article_type', array(
				'label' => __( 'Featured article type', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_article_type',
				'type' => 'radio',
				'choices' => array(
					'post' => __( 'Display post', 'emanon' ),
					'page' => __( 'Display page', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Display type
			$wp_customize->add_setting( 'featured_display_type', array(
				'default' => 'new_arrivals',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_featured_display_type',
			) );
			$wp_customize->add_control( 'featured_display_type', array(
				'label' => __( 'Featured display type', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_display_type',
				'type' => 'radio',
				'choices' => array(
					'new_arrivals' => __( 'Display New arrivals', 'emanon' ),
					'featured' => __( 'Display Featured', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Number of Featured article
			$wp_customize->add_setting( 'featured_max', array(
				'default' => 3,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'featured_max', array(
				'label' => __( 'Number of entry (default 3)', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 3,
			) );

			// Featured section label
			$wp_customize->add_setting( 'featured_section_label', array(
				'default' => __( 'PICK UP', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'featured_section_label', array(
				'label' => __( 'Section label', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_section_label',
				'type' => 'text',
				'priority' => 4,
			) );

			// Featured background color
			$wp_customize->add_setting( 'featured_section_background_color', array(
				'default' => '#ededed',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_section_background_color', array(
				'label' => __( 'Featured background color', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_section_background_color',
				'priority' => 5,
			) ) );

			// Featured background image
			$wp_customize->add_setting( 'featured_image', array(
				'default' =>	get_theme_file_uri('/lib/images/emanon-header-img.jpg'),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_image_url',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_image', array (
				'label' => __( 'Featured background image', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 400px.', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_image',
				'priority' => 6,
			) ) );

			// Featured background image opacity
			$wp_customize->add_setting( 'featured_background_image_opacity', array(
				'default' => 1,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'featured_background_image_opacity', array(
				'label' => __( 'Featured background image opacity', 'emanon' ),
			 'section' => 'emanon_featured_section',
				'settings' => 'featured_background_image_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 7,
			) );

			// Featured background image blur
			$wp_customize->add_setting( 'featured_image_blur', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'featured_image_blur', array(
				'label' => __( 'Featured background image blur (default 0)', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_image_blur',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
				),
				'priority' => 8,
			) );

			// Display overlay pattern
			$wp_customize->add_setting( 'featured_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'featured_display_overlay', array(
				'label' =>__( 'Display overlay pattern', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 9,
			) );

		/*------------------------------------------------------------------------------------
		/* Page box section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_pagebox_section', array (
			'title' => __( 'Page box section settings', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display page box section
			$wp_customize->add_setting( 'display_pagebox_section', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_pagebox_section( $wp_customize, 'display_pagebox_section', array(
				'section' => 'emanon_pagebox_section',
				'priority' => 1,
			) ) );


		/*------------------------------------------------------------------------------------
		/* Video section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_video', array (
			'title' => __( 'Video section settings', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display video section
			$wp_customize->add_setting( 'display_header_video', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_video_section( $wp_customize, 'display_header_video', array(
				'section' => 'emanon_header_video',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Eye catch Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_eyecatch_image', array (
			'title' => __( 'Eye catch section settings', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display video section
			$wp_customize->add_setting( 'display_eyecatch_image', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_eyecatch_image( $wp_customize, 'display_eyecatch_image', array(
				'section' => 'emanon_eyecatch_image',
				'priority' => 1,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Entry section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_entry_section', array (
			'title' => __( 'Entry section settings', 'emanon' ),
			'priority' => 15,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display entry section
			$wp_customize->add_setting( 'display_entry_section', array(
				'default' => 'true',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_entry_section', array(
				'label' =>__( 'Display Entry section', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'display_entry_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Entry section title
			$wp_customize->add_setting( 'entry_section_title', array(
				'default' => __( 'Latest Posts', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'entry_section_title', array(
				'label' => __( 'Entry section title', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'entry_section_title',
				'type' => 'text',
				'priority' => 2,
			) );