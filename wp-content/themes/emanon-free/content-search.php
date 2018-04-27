<?php
/**
* Content Search
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<?php if ( have_posts() ) : ?>
<!--find keyword-->
<div <?php post_class( "clearfix" ); ?>>
 <?php while ( have_posts() ) : the_post() ?>
 <article class="archive-list">
		<?php emanon_content_entry_thumbnail(); ?>
		<header class="archive-header">
			<?php emanon_entry_meta_list(); ?>
			<h2 class="archive-header-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php if ( emanon_excerpt() ): ?>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php emanon_read_more(); ?>
		</header>
	</article >
	<?php endwhile; ?>
	<?php the_posts_pagination( array( 'prev_text' => __( 'Previous', 'emanon' ), 'next_text' => __( 'Next', 'emanon' ), ) ); ?>
</div>
<!--end find keyword-->
<?php else: ?>
<!--not find keyword-->
<article class="article">
	<header class="archive-header">
		<h2><?php _e( 'Nothing found.', 'emanon' ); ?></h2>
	</header>
	<section class="article-body">
		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'emanon' ); ?></p>
	</section>
</article >
<!--end not find keyword-->
<?php endif; ?>
