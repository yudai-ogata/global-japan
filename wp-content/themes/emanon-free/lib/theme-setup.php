<?php
/**
* Theme Setup
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Pro 1.2.8
*/

function emanon_menu_pages() {
	add_menu_page( __( 'Emanon Setup', 'emanon' ), __( 'Emanon Setup', 'emanon' ), 'manage_options', 'setting_manual_page', 'setting_manual_page',"",81 );
	add_submenu_page( 'setting_manual_page', __( 'Emanon manual', 'emanon' ), __( 'Emanon manual', 'emanon' ), 'manage_options', 'setting_manual_page', 'setting_manual_page' );
}

add_action('admin_menu', 'emanon_menu_pages');

/*------------------------------------------------------------------------------------
/* 設定マニュアル
/*----------------------------------------------------------------------------------*/
function setting_manual_page() {
?>
<div class="wrap">

	<h2><?php _e( 'Emanon Free setting manual', 'emanon' ); ?></h2>
	<p><?php _e( 'Thank you for install Emanon Free. Emanon Free implements the original Customizing function.', 'emanon' ); ?><br>
	<?php _e( 'Please set according to your purpose of use while the contents of the following manual.', 'emanon' ); ?></p>

<div class="postbox metabox-holder">

	<h3 class="hndle"><?php _e( 'Theme customization features', 'emanon' ); ?></h3>
		<div class="inside">
			<ul>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/general-settings/"><?php _e( 'General settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/header-settings/"><?php _e( 'Header settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/content-settings/"><?php _e( 'Content settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/footer-settings/"><?php _e( 'Footer settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/frontpage-settings/"><?php _e( 'Front page settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/template-settings/"><?php _e( 'Template settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/cta-settings/"><?php _e( 'CTA settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/ad-settings/"><?php _e( 'AD settings', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/widget-settings/"><?php _e( 'Widget settings', 'emanon' ); ?></a></li>
			</ul>
		</div>

</div>

<div class="postbox metabox-holder">

	<h3 class="hndle"><?php _e( 'Post sample and FAQ', 'emanon' ); ?></h3>
		<div class="inside">
			<ul>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/text-editor/"><?php _e( 'Text editor', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/post-format-youtube-googlemap/"><?php _e( 'Post format youtube googlemap', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/template-nextpage/"><?php _e( 'Template nextpage', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/markup-html-tags-and-formatting/"><?php _e( 'Markup html tags and formatting', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/markup-image-alignment/"><?php _e( 'Markup image alignment', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-free/template-comments/"><?php _e( 'Template comments', 'emanon' ); ?></a></li>
			</ul>
		</div>

</div>

<div class="postbox metabox-holder">

	<h3 class="hndle"><?php _e( 'Infomation', 'emanon' ); ?></h3>
		<div class="inside">
			<ul>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-marketing/"><?php _e( 'Free marketing course', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-pro-theme/"><?php _e( 'Buy Emanon Pro', 'emanon' ); ?></a></li>
				<li><a target="_blank" href="https://wp-emanon.jp/emanon-plug-in/"><?php _e( 'Buy Emanon Plug-in', 'emanon' ); ?></a></li>
			</ul>
		</div>

</div>

<?php
}