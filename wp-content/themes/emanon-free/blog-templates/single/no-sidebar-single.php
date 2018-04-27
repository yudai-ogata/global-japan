<?php
/**
* Template No Sidebar Single
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
			<div class="col12">
			<?php get_template_part( 'content', get_post_format() ); ?>
			</div>
		</main>
		<!--end main-->
	</div>
</div>
<!--end content-->
