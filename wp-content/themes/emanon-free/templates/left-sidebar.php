<?php
/**
* Template Name: サイドバー:左
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<?php get_header(); ?>
<div class="content">
	<div class="container">
		<?php emanon_page_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col-main-right clearfix">
			<?php	get_template_part( 'content', 'page' ); ?>
			</div>
		</main>
		<!--end main-->
		<!--sidebar-->
		<aside class="col-sidebar-left sidebar">
			<?php get_sidebar(); ?>
		</aside>
		<!--end sidebar-->
	</div>
</div>
<?php get_footer(); ?>