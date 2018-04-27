<?php
/**
* Content
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
$display_mobile_sns_share = get_theme_mod( 'display_mobile_sns_share', '' );
$display_fb_like_btn = get_theme_mod( 'display_fb_like_btn', '' );
$display_content_twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
$display_content_sns_follow = get_theme_mod( 'display_content_sns_follow', '' );
$display_author_profile = get_theme_mod( 'display_author_profile', '' );
?>
<!--article-->
<article <?php post_class( 'article' ); ?>>
	<?php while ( have_posts() ): the_post(); ?>
	<header>
		<div class="article-header">
			<h1 class="entry-title"><?php the_title(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
			<?php emanon_entry_meta(); ?>
		</div>
		<?php if( has_post_thumbnail() ): ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail( 'large-thumbnail' ); ?>
		</div>
		<?php endif; ?>
	</header>
	<section class="article-body">
		<?php emanon_top_sns_share(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages('before=<div class="next-page">&after=</div>&next_or_number=number&pagelink=<span class="page-numbers">%</span>'); ?>
		<?php emanon_bottom_sns_share(); ?>
		<?php if( is_emanon_exclude_ad_article() ): ?>
		<?php emanon_under_ad300(); ?>
		<?php endif; ?>
	</section>
	<?php if( is_emanon_exclude_cta_article() ): ?>
	<?php emanon_cta_single(); ?>
	<?php endif; ?>
	<?php if ( comments_open() || get_comments_number() || $display_mobile_sns_share || $display_fb_like_btn || $display_content_twitter_follow || $display_content_sns_follow || $display_author_profile ): ?>
	<footer class="article-footer">
		<?php emanon_mobile_sns_share(); ?>
		<div class="article-follow">
			<?php emanon_content_sns_follow(); ?>
		</div>
		<?php emanon_author_profile(); ?>
		<?php comments_template(); ?>
	</footer>
	<?php endif; ?>
	<?php endwhile; ?>
</article>
<!--end article-->
<?php emanon_display_pre_nex(); ?>
<?php emanon_related_post(); ?>