<?php
/**
* Theme Emanon Free Customizer Content Panel
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Content Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_content_settings', array(
	'priority' => 40,
	'capability' => 'edit_theme_options',
	'title' => __( 'Content settings', 'emanon' ),
	) );

	 /*------------------------------------------------------------------------------------
		/* Breadcrumb Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_breadcrumb_options', array (
			'title' => __( 'Breadcrumb options', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_content_settings',
		) );

			// Display the breadcrumb in single post
			$wp_customize->add_setting( 'display_single_breadcrumb', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_single_breadcrumb', array(
				'label' => __( 'Display the breadcrumb in single post', 'emanon' ),
				'section' => 'emanon_breadcrumb_options',
				'settings' => 'display_single_breadcrumb',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display the breadcrumb in archive
			$wp_customize->add_setting( 'display_archive_breadcrumb', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_archive_breadcrumb', array(
				'label' => __( 'Display the breadcrumb in archive', 'emanon' ),
				'section' => 'emanon_breadcrumb_options',
				'settings' => 'display_archive_breadcrumb',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display the breadcrumb in page
			$wp_customize->add_setting( 'display_page_breadcrumb', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_page_breadcrumb', array(
				'label' => __( 'Display the breadcrumb in page', 'emanon' ),
				'section' => 'emanon_breadcrumb_options',
				'settings' => 'display_page_breadcrumb',
				'type' => 'checkbox',
				'priority' => 3,
			) );

		/*------------------------------------------------------------------------------------
		/* Post Tag Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_post_tag_options', array (
			'title' => __( 'Post tag options', 'emanon' ),
			 'description' => __( 'Display setting of the post page.', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_content_settings',
		) );

			// Display date
			$wp_customize->add_setting( 'display_entry_date', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_entry_date', array(
				'label' =>__( 'Display date', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_entry_date',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display updade date
			$wp_customize->add_setting( 'display_update_date', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_update_date', array(
				'label' =>__( 'Display updade date', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_update_date',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display category
			$wp_customize->add_setting( 'display_category', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_category', array(
				'label' => __( 'Display category', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_category',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Display tag
			$wp_customize->add_setting( 'display_tag', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_tag', array(
				'label' => __( 'Display tag', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_tag',
				'type'	=> 'checkbox',
				'priority' => 4,
			) );

			// Display comments number
			$wp_customize->add_setting( 'display_comments_number', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_comments_number', array(
				'label' => __( 'Display comments number', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_comments_number',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display author
			$wp_customize->add_setting( 'display_author', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_author', array(
				'label' => __( 'Display author', 'emanon' ),
				'section' => 'emanon_post_tag_options',
				'settings' => 'display_author',
				'type' => 'checkbox',
				'priority' => 6,
			) );

		/*------------------------------------------------------------------------------------
		/* SNS Share Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sns_share_options', array (
			'title' => __( 'SNS share options', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_content_settings',
		) );

			// SNS share top position
			$wp_customize->add_setting( 'display_top_sns_share', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_top_sns_share', array(
				'label'	 => __( 'SNS share top position', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_top_sns_share',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// SNS share bottom position
			$wp_customize->add_setting( 'display_bottom_sns_share', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_bottom_sns_share', array(
				'label'	 => __( 'SNS share bottom position', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_bottom_sns_share',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// SNS layout type
			$wp_customize->add_setting( 'sns_layout_type', array(
				'default' => 'no_count',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_sns_layout_type',
			) );
			$wp_customize->add_control( new emanon_pro_sns_count( $wp_customize, 'sns_layout_type', array(
				'section' => 'emanon_sns_share_options',
				'priority' => 3,
			)));

			// Display twitter btn
			$wp_customize->add_setting( 'display_twitter_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_twitter_btn', array(
				'label' => __( 'Display twitter btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_twitter_btn',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Display facebook btn
			$wp_customize->add_setting( 'display_facebook_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_facebook_btn', array(
				'label'	 => __( 'Display facebook btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_facebook_btn',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display Hatena btn
			$wp_customize->add_setting( 'display_hatena_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_hatena_btn', array(
				'label' => __( 'Display hatena btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_hatena_btn',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display google+ btn
			$wp_customize->add_setting( 'display_google_plus_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_google_plus_btn', array(
				'label' => __( 'Display google+ btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_google_plus_btn',
				'type'	=> 'checkbox',
				'priority' => 7,
			) );

			// Display pocket btn
			$wp_customize->add_setting( 'display_pocket_btn', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			));
			$wp_customize->add_control( 'display_pocket_btn', array(
				'label' => __( 'Display pocket btn', 'emanon' ),
				'section' => 'emanon_sns_share_options',
				'settings' => 'display_pocket_btn',
				'type' => 'checkbox',
				'priority' => 8,
			));

		/*------------------------------------------------------------------------------------
		/* h Tag Style Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_h_style_options', array (
			'title' => __( 'H tag style options', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_content_settings',
		) );

			// h tag style
			$wp_customize->add_setting( 'h_tag_style', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_h_style_options( $wp_customize, 'h_tag_style', array(
				'section' => 'emanon_h_style_options',
				'priority' => 1,
			)));

		/*------------------------------------------------------------------------------------
		/* Author Profile Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_author_profile_options', array (
			'title' => __( 'Author profile option', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_content_settings',
		) );

			// Display Author profile
			$wp_customize->add_setting( 'display_author_profile', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_author_profile( $wp_customize, 'display_author_profile', array(
				'section' => 'emanon_author_profile_options',
			)));

		/*------------------------------------------------------------------------------------
		/* SNS follow option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sns_follow_options', array (
			'title' => __( 'SNS follow options', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_content_settings',
		) );

			// Display SNS follow btn
			$wp_customize->add_setting( 'display_content_sns_follow', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_content_sns_follow', array(
				'label' => __( 'Display sns follow btn', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'display_content_sns_follow',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// SNS follow title
			$wp_customize->add_setting( 'sns_follow_title', array(
				'default' => __( 'Follow me on sns', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sns_follow_title', array(
				'label' => __( 'SNS follow title', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'settings' => 'sns_follow_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Display display facebook like
			$wp_customize->add_setting( 'display_facebook_like', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_facebook_like( $wp_customize, 'display_facebook_like', array(
				'section' => 'emanon_sns_follow_options',
				'priority' => 3,
			)));

			// Display twitter follow btn
			$wp_customize->add_setting( 'display_content_twitter_follow', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_content_twitter_follow( $wp_customize, 'display_content_twitter_follow', array(
				'label' => __( 'Display twitter follow btn', 'emanon' ),
				'section' => 'emanon_sns_follow_options',
				'priority' => 4,
			)));

		/*------------------------------------------------------------------------------------
		/* Related Post Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_related_post_options', array (
			'title' => __( 'Related post options', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_content_settings',
		) );

			// Display prev link and next link
			$wp_customize->add_setting( 'display_pre_nex', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_pre_nex', array(
				'label' => __( 'Display prev link and next link', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'display_pre_nex',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display related post
			$wp_customize->add_setting( 'display_related_post', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_related_post', array(
				'label' => __( 'Display related Post', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'display_related_post',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Maximum number of posts per related post
			$wp_customize->add_setting( 'related_post_max', array(
				'default' => 4,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'related_post_max', array(
				'label' => __( 'Maximum number of posts per related posts (default 4)', 'emanon' ),
				'section' => 'emanon_related_post_options',
				'settings' => 'related_post_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
					'step' => 1,
				),
				'priority' => 3,
			) );

		/*------------------------------------------------------------------------------------
		/* Mobile Footer Buttons Option
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_mobile_footer_btn_options', array (
			'title' => __( 'Mobile footer buttons options', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_content_settings',
		) );

			// Display cta
			$wp_customize->add_setting( 'display_mobile_footer_btn', array(
				'sanitize_callback' => 'emanon_customize_pro_version',
			) );
			$wp_customize->add_control( new emanon_pro_display_mobile_footer_btn_function( $wp_customize, 'display_mobile_footer_btn', array(
				'section' => 'emanon_mobile_footer_btn_options',
				'priority' => 1,
			) ) );