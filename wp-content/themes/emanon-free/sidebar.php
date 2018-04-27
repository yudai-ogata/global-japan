<?php
/**
* Template Sidebar Widget Area
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<?php if( !is_404() && !wp_is_mobile() ) :?>
	<?php if( is_emanon_exclude_ad_article() ): ?>
	<?php emanon_sidebar_ad300(); ?>
	<?php endif; ?>
<?php endif; ?>
<?php dynamic_sidebar( 'sidebar-widget' ); ?>
<?php if ( is_active_sidebar( 'sidebar-widget-fixed' ) ): ?>
<div class="side-widget-fixed">
<?php dynamic_sidebar( 'sidebar-widget-fixed' ); ?>
</div>
<?php endif; ?>