<?php
/**
* Template footer
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<?php emanon_cta_footer_section(); ?>
<!--footer-->
<footer class="footer">
	<?php emanon_footer_sns_follow(); ?>
	<?php emanon_cta_popup_mobile(); ?>
	<!--sidebar footer-->
	<?php if ( is_active_sidebar( 'footer-w-left' ) || is_active_sidebar( 'footer-w-center' ) || is_active_sidebar( 'footer-w-right' ) ): ?>
	<?php get_sidebar( 'footer' ); ?>
	<?php endif; ?>
	<!--end sidebar footer-->
	<div class="container">
		<div class="col12">
			<?php emanon_top_page_btn(); ?>
			<?php wp_nav_menu( array ( 'theme_location' => 'footer-nav', 'fallback_cb' => '', 'depth' => '1', 'container' => false, 'menu_class' => 'footer-nav') ); ?>
			<?php emanon_footer_copy(); ?>
		</div>
	</div>
</footer>
<!--end footer-->
<?php wp_footer(); ?>
<?php if ( is_home() || is_front_page() ): ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
$("a[href^=#]").click(function(){var t=900,r=$(this).attr("href"),o=$("#"==r||""==r?"html":r),a=o.offset().top;return $("body,html").animate({scrollTop:a},t,"swing"),!1});
});
</script>
<?php endif; ?>
</body>
</html>