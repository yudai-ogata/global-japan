<?php
/**
* Google Analytics
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
	$tracking_id = get_theme_mod( 'tracking_id', '' );
?>
<?php if (!is_user_logged_in()) :?>
<!--google analytics-->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', '<?php echo esc_js( $tracking_id ) ;?>', 'auto');
	ga('send', 'pageview');
</script>
<!--end google analytics-->
<?php endif; ?>