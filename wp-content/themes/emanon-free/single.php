<?php
/**
* Template Single Posts
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

get_header(); ?>

<?php // 投稿ページレイアウトの表示判定
	$single_layout_type = get_theme_mod( 'content_sidebar_layout', 'right_sidebar' );
	if ( $single_layout_type == 'right_sidebar') {
		get_template_part( 'blog-templates/single/right-sidebar-single' );
	}
	if ( $single_layout_type == 'left_sidebar' ) {
		get_template_part( 'blog-templates/single/left-sidebar-single' );
	}
	if ( $single_layout_type == 'no_sidebar' ) {
	 get_template_part( 'blog-templates/single/no-sidebar-single' );
	}
; ?>

<?php get_footer(); ?>