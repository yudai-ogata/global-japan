<?php
/**
* Theme Customizer
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/

/*------------------------------------------------------------------------------------
/* WP Customize Control
/*----------------------------------------------------------------------------------*/
	if( class_exists( 'WP_Customize_Control' ) ):
		class Customize_Textarea_Control extends WP_Customize_Control{
			public $type = 'textarea';
			public function render_content() {
				?>
				<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
				</label>
				<?php
			}
		}


	class emanon_pro_display_facebook_like extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/facebook-like/" target="_blank">Emanon Pro version</a> to add Facebook like button', 'emanon' );
		}
	}

	class emanon_pro_display_content_twitter_follow extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/twitter-follow/" target="_blank">Emanon Pro version</a> to add twitter follow', 'emanon' );
		}
	}

	class emanon_pro_header_background_image extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/header-layout/" target="_blank">Emanon Pro version</a> to header background image', 'emanon' );
		}
	}

	class emanon_pro_display_mobile_nav extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/mobile-navi/" target="_blank">Emanon Pro version</a> to mobile nav', 'emanon' );
		}
	}

	class emanon_pro_display_author_profile extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/author-profile/" target="_blank">Emanon Pro version</a> to add author profile','emanon' );
		}
	}

	class emanon_pro_display_slider_image extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/slideshow/" target="_blank">Emanon Pro version</a> to add slider image', 'emanon' );
		}
	}

	class emanon_pro_display_slider_content_image extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the<a href="https://wp-emanon.jp/emanon-pro/content-slideshow/" target="_blank">Emanon Pro version</a> to add slider image', 'emanon' );
		}
	}
	
	class emanon_pro_display_pagebox_section extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/pagebox/" target="_blank">Emanon Pro version</a> to add pagebox section', 'emanon' );
		}
	}

	class emanon_pro_display_video_section extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/video/" target="_blank">Emanon Pro version</a> to add video section', 'emanon' );
		}
	}

	class emanon_pro_display_eyecatch_image extends WP_Customize_Control {
		public function render_content() {
			echo __( 'Check out the <a href="https://wp-emanon.jp/emanon-pro/header-eyecatch/" target="_blank">Emanon Pro version</a> to add video section', 'emanon' );
		}
	}

	class emanon_pro_display_cta_function extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/cta/" target="_blank">Emanon Pro version</a> to cta function','emanon' );
		}
	}

	class emanon_pro_h_style_options extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/h-tag/" target="_blank">Emanon Pro version</a> to h style optionsn','emanon' );
		}
	}

	class emanon_pro_sns_count extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/sns-count-cache/" target="_blank">Emanon Pro version</a> to sns count','emanon' );
		}
	}

	class emanon_compress extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/compress/" target="_blank">Emanon Pro version</a> to minified','emanon' );
		}
	}

	class emanon_pro_display_landing_page extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/landing-page/" target="_blank">Emanon Pro version</a> to landing page','emanon' );
		}
	}

	class emanon_pro_display_footer_sns_follow extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/footer/" target="_blank">Emanon Pro version</a> to footer sns follow','emanon' );
		}
	}

	class emanon_pro_display_mobile_footer_btn_function extends WP_Customize_Control {
		public function render_content() {
			echo __('Check out the <a href="https://wp-emanon.jp/emanon-pro/mobile-footer-button/" target="_blank">Emanon Pro version</a> to mobile footer btn','emanon' );
		}
	}

	endif;


/*------------------------------------------------------------------------------------
/* Customize Register
/*----------------------------------------------------------------------------------*/
	add_action( 'customize_register', 'emanon_customize_register' );
	function emanon_customize_register( $wp_customize ) {
	
		$wp_customize->get_section( 'colors' )->panel = 'emanon_general_settings';
		$wp_customize->get_section( 'colors' )->priority = '6';
		$wp_customize->get_section( 'background_image' )->panel = 'emanon_general_settings';
		$wp_customize->get_section( 'background_image' )->priority = '10';
		$wp_customize->get_section( 'header_image' )->panel = 'emanon_landing_page_settings';
		$wp_customize->get_section( 'header_image' )->priority = '2';

		/* General Panel */
		require get_template_directory() . '/lib/customizer-panels/general-panel.php';

		/* Header Panel */
		require get_template_directory() . '/lib/customizer-panels/header-panel.php';

		/* Content Panel */
		require get_template_directory() . '/lib/customizer-panels/content-panel.php';

		/* Footer Panel */
		require get_template_directory() . '/lib/customizer-panels/footer-panel.php';

		/* Front Page Panel */
		require get_template_directory() . '/lib/customizer-panels/front-page-panel.php';

		/* Template Panel */
		require get_template_directory() . '/lib/customizer-panels/template-panel.php';

		/* CTA Panel */
		require get_template_directory() . '/lib/customizer-panels/cta-panel.php';

		/* Landing Panel */
		require get_template_directory() . '/lib/customizer-panels/landing-page-panel.php';

		/* AD Panel */
		require get_template_directory() . '/lib/customizer-panels/ad-panel.php';

		/* Page Speed Panel */
		require get_template_directory() . '/lib/customizer-panels/page-speed-panel.php';
}

/*------------------------------------------------------------------------------------
/* Sanitize
/*----------------------------------------------------------------------------------*/
	function emanon_customize_sanitize_image_url( $input ) {
	if( preg_match( '/^' . preg_quote( home_url(), '/' ) . '\/.+?\.(gif|jpg|jpeg|bmp|png)$/', $input ) ) {
		return $input;
		} else {
			return '';
		}
	}

	function emanon_customize_sanitize_checkbox( $input ) {
	if ( $input == true ) {
		return true;
		} else {
		return '';
		}
	}

	function emanon_customize_sanitize_text( $input ) {
		$input = wp_kses_post( $input );
		return $input;
	}

	function emanon_customize_sanitize_textarea( $input ) {
		$input = stripslashes( wp_filter_post_kses( addslashes( $input ) ) );
		return $input;
		}

	function emanon_customize_sanitize_number( $input ) {
		$input = absint( $input );
		return $input;
		}

	function emanon_customize_sanitize_url( $input ) {
		$input = esc_url( $input );
		return $input;
	}

	function emanon_customize_sanitize_email( $input ) {
		if( is_email( $input ) ){
			return $input;
		}else{
			return '';
		}
	}

	function emanon_customize_sanitize_colorcode( $input ) {
		if ( preg_match( '/^#([\da-fA-F]{6}|[\da-fA-F]{3})$/', $input ) ) {
		return $input;
		} else {
			return '';
		}
	}

	function emanon_customize_integer( $input ) {
		if( is_numeric( $input ) ) {
				return intval( $input );
		}
	}

	function emanon_customize_sanitize_color_scheme( $input ) {
		$valid = array(
					'#161616,#777,#aaa'		 => __( 'Color scheme of black', 'emanon' ),
					'#d2d5d9,#7c899a,#acb4bf' => __( 'Color scheme of gray', 'emanon' ),
					'#ed5058,#eeb043,#eeb043' => __( 'Color scheme of red', 'emanon' ),
					'#ffab11,#f25800,#ff8037' => __( 'Color scheme of orange', 'emanon' ),
					'#ff8cb2,#914a8d,#b977b5' => __( 'Color scheme of pink', 'emanon' ),
					'#00b7e0,#6c819a,#9eacbc' => __( 'Color scheme of blue', 'emanon' ),
					'#a8e798,#4cd1db,#76dce4' => __( 'Color scheme of green', 'emanon' ),
					'#957dc6,#c4b0a4,#d1c3b9' => __( 'Color scheme of purple', 'emanon' ),
		);

		if ( array_key_exists( $input, $valid ) ) {
			return $input;
			} else {
			return '';
			}
		}

	function emanon_customize_sanitize_twitter_card_type( $input ) {
		if( $input == 'summary' || $input == 'summary_large_image' ) {
		return $input;
		} else {
			return 'summary';
		}
	}

	function emanon_customize_sanitize_header_layout_type( $input ) {
		if( $input == 'header-default' || $input == 'header-center' || $input == 'header-line' ) {
		return $input;
		} else {
			return 'header-default';
		}
	}

	function emanon_customize_sanitize_global_nav_design_type( $input ) {
		if( $input == 'default' || $input == 'tracking' ) {
		return $input;
		} else {
			return 'default';
		}
	}

	function emanon_customize_sanitize_firstview_layout_type( $input ) {
		if( $input == 'no_display' || $input == 'featured' || $input == 'slider' || $input == 'video' || $input == 'pagebox' ) {
		return $input;
		} else {
			return 'no_display';
		}
	}

	function emanon_customize_sanitize_slider_animation_type( $input ) {
		if( $input == 'fade' || $input == 'horizontal' ) {
		return $input;
		} else {
			return 'fade';
		}
	}

	function emanon_customize_sanitize_slider_text_animation_type( $input ) {
		if( $input == 'fade' || $input == 'slide' ) {
		return $input;
		} else {
			return 'fade';
		}
	}

	function emanon_customize_sanitize_header_message_layout_type( $input ) {
		if( $input == 'header_message_left' || $input == 'header_message_center' || $input == 'header_message_right' ) {
		return $input;
		} else {
			return 'header_message_center';
		}
	}

	function emanon_customize_sanitize_slider_message_layout_type( $input ) {
		if( $input == 'slider_message_left' || $input == 'slider_message_center' || $input == 'slider_message_right') {
		return $input;
		} else {
			return 'slider_message_center';
		}
	}

	function emanon_customize_sanitize_overlay_pattern_type( $input ) {
		if( $input == 'pattern_dots' || $input == 'pattern_diamond' || $input == 'pattern_none' ) {
		return $input;
		} else {
			return 'pattern_none';
		}
	}

	function emanon_customize_sanitize_featured_article_type( $input ) {
		if( $input == 'post' || $input == 'page' ) {
		return $input;
		} else {
			return 'post';
		}
	}

	function emanon_customize_sanitize_featured_display_type( $input ) {
		if( $input == 'featured' || $input == 'new_arrivals' ) {
		return $input;
		} else {
			return 'featured';
		}
	}

	function emanon_customize_sanitize_rangeslider( $input ) {
	if ( is_numeric( $input ) && $input >= 0 && $input <= 1 ) {
	return $input ;
		} else {
			return '';
		}
	}

	function emanon_customize_sanitize_read_more( $input ) {
		if( $input == 'read_more' || $input == 'read_more_post_title' ) {
		return $input;
		} else {
			return 'read_more';
		}
	}

	function emanon_customize_sanitize_sidebar_layout_type( $input ) {
		if( $input == 'right_sidebar' || $input == 'left_sidebar' || $input == 'no_sidebar' ) {
		return $input;
		} else {
			return 'right_sidebar';
		}
	}

	function emanon_customize_sanitize_entry_layout_type( $input ) {
		if( $input == 'one_column' || $input == 'two_column' || $input == 'three_column' || $input == 'big_column' ) {
		return $input;
		} else {
			return 'one_column';
		}
	}

	function emanon_customize_sanitize_list_layout_type( $input ) {
		if( $input == 'one_column' || $input == 'two_column' || $input == 'three_column' ) {
		return $input;
		} else {
			return 'one_column';
		}
	}

	function emanon_customize_sanitize_cta_post_layout_type( $input ) {
		if( $input == 'cta_post_left' || $input == 'cta_post_center' || $input == 'cta_post_right') {
		return $input;
		} else {
			return 'cta_post_left';
		}
	}

	function emanon_customize_sanitize_cta_popup_layout_type( $input ) {
		if( $input == 'cta_popup_left' || $input == 'cta_popup_center' || $input == 'cta_popup_right' ) {
		return $input;
		} else {
			return 'cta_popup_left';
		}
	}

	function emanon_customize_sanitize_cta_landing_page_layout_type( $input ) {
		if( $input == 'cta_landing_page_left' || $input == 'cta_landing_page_center' || $input == 'cta_landing_page_right' ) {
		return $input;
		} else {
			return 'cta_landing_page_left';
		}
	}

	function emanon_customize_sanitize_sns_layout_type( $input ) {
		if( $input == 'no_count' || $input == 'count' ) {
		return $input;
		} else {
			return 'no_count';
		}
	}

	function emanon_customize_sanitize_h2_style( $input ) {
		if( $input == 'none' || $input == 'background' || $input == 'balloon' || $input == 'border-left' || $input == 'border-left-background' || $input == 'border-left-bottom' || $input == 'border-bottom' || $input == 'border-bottom-two' || $input == 'border-left-background-stripe' || $input == 'border-top-bottom-stripe' ) {
		return $input;
		} else {
			return 'border-left-background';
		}
	}

	function emanon_customize_sanitize_h3_style( $input ) {
		if( $input == 'none' || $input == 'background' || $input == 'balloon' || $input == 'border-left' || $input == 'border-left-background' || $input == 'border-left-bottom' || $input == 'border-bottom' || $input == 'border-bottom-two' || $input == 'border-left-background-stripe' || $input == 'border-top-bottom-stripe' ) {
		return $input;
		} else {
			return 'border-left-background';
		}
	}

	function emanon_customize_sanitize_h4_style( $input ) {
		if( $input == 'none' || $input == 'background' || $input == 'balloon' || $input == 'border-left' || $input == 'border-left-background' || $input == 'border-left-bottom' || $input == 'border-bottom' || $input == 'border-bottom-two' || $input == 'border-left-background-stripe' || $input == 'border-top-bottom-stripe' ) {
		return $input;
		} else {
			return 'border-left-background';
		}
	}

	function emanon_customize_sanitize_lp_header_cta_type( $input ) {
		if( $input == 'default' || $input == 'tracking' ) {
		return $input;
		} else {
			return 'default';
		}
	}

	function emanon_customize_sanitize_empathy_layout_type( $input ) {
		if( $input == 'default' || $input == 'image' ) {
		return $input;
		} else {
			return 'default';
		}
	}

	function emanon_customize_sanitize_postscript_layout_type( $input ) {
		if( $input == 'none' || $input == 'background' || $input == 'balloon' || $input == 'border-left' || $input == 'border-left-background' || $input == 'border-left-bottom' || $input == 'border-bottom' || $input == 'border-bottom-two' || $input == 'border-left-background-stripe' || $input == 'border-top-bottom-stripe' ) {
		return $input;
		} else {
			return 'border-left-background';
		}
	}