<?php
/**
* Template Left Sidebar Author
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_archive_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col-main-right clearfix">
				<?php the_archive_title( '<div class="archive-title"><h1><span>','</span></h1></div>' ); ?>
				<?php emanon_author_archive(); ?>
				<?php get_template_part( 'content', 'archive' ); ?>
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
<!--end content-->
