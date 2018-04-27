<?php
/**
* Template Right Sidebar Single
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_single_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col-main first">
			<?php get_template_part( 'content', get_post_format() ); ?>
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
