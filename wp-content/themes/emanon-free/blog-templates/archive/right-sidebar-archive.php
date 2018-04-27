<?php
/**
* Template Right Sidebar Archive
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_archive_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col-main clearfix">
				<?php if ( is_404() ) : ?>
				<div class="archive-title"><h1><span><?php _e( '404 File not found.', 'emanon' ); ?></span></h1></div>
				<?php elseif ( is_search() ) : ?>
				<div class="archive-title"><h1><span><?php _e( 'Search Word', 'emanon' ); ?><?php the_search_query(); ?><i class="fa fa-angle-right"></i><?php echo $wp_query->found_posts; ?><?php _e( 'Number', 'emanon' ); ?></span></h1></div>
				<?php else: ?>
				<?php the_archive_title( '<div class="archive-title"><h1><span>','</span></h1></div>' ); ?>
				<?php if ( !is_paged() ) : ?>
				<div class="archive-description">
					<p><?php emanon_archive_description(); ?></p>
				</div>
				<?php endif; ?>
				<?php endif; ?>
				<?php
				$name = ( is_search() ) ? 'search' : 'archive';
				if ( have_posts() ) {
					get_template_part( 'content', $name );
				} else {
					get_template_part( 'content', 'none' );
				}
				?>
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
