<?php
/**
* Ad 300px 250px
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<?php
if( is_emanon_ad_single() && is_single() || is_emanon_ad_page() && is_page() || is_emanon_ad_listpage() && is_home() || is_emanon_ad_listpage() && is_front_page() || is_emanon_ad_listpage() && is_archive() ) {
	if( is_active_sidebar( 'ad-300' ) ) {
		dynamic_sidebar( 'ad-300' );
	} else {
		echo '<p class="no-code">' . __( 'Ad code has not been entered in the widget.', 'emanon' ) . '</p>' . "\n";
	}
}
?>