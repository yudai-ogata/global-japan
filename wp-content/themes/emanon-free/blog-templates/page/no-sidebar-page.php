<?php
/**
* Template No Sidebar Page
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_page_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col12">
			<?php	get_template_part( 'content', 'page' ); ?>
			</div>
		</main>
		<!--end main-->
	</div>
</div>
<!--end content-->
