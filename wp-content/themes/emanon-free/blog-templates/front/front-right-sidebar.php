<?php
/**
* Template right sidebar frontpage
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
	$entry_section_title = get_theme_mod( 'entry_section_title', __( 'Latest Posts', 'emanon' ) );
?>
<!--content-->
<div class="content">
	<div class="container">
		<!--main-->
		<main>
			<div class="col-main clearfix">
			<?php if ( $entry_section_title ): ?>
			<div class="entry-header">
				<h2><span><?php echo esc_html( $entry_section_title); ?></span></h2>
			</div>
			<?php endif; ?>
			<?php	get_template_part( 'content', 'home' ); ?>
			</div>
		</main>
		<!--end main-->
		<!--sidebar-->
		<aside class="col-sidebar sidebar">
			<?php get_sidebar(); ?>
		</aside>
		<!--end sidebar-->
	</div>
</div>
<!--end content-->