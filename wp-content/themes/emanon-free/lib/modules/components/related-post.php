<?php
/**
* Related Post
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
	$categories = get_the_category( $post->ID );
	$related_post_max = get_theme_mod( 'related_post_max', 4 );
	$category_ID = array();
	foreach( $categories as $category ):
	array_push( $category_ID, $category -> cat_ID );
	endforeach ;
	$args = array(
	'post__not_in' => array( $post -> ID ),
	'posts_per_page'=> intval( $related_post_max ),
	'category__in' => $category_ID,
	'orderby' => 'rand',
	);
	$query = new WP_Query( $args ); 
?>
<!--related post-->
<aside>
	<div class="related wow fadeIn" data-wow-delay="0.2s">
		<h3><?php _e( 'Related Post', 'emanon' ); ?></h3>
		<?php if( $query -> have_posts() ): ?>
		<ul class="related-list">
			<?php while ( $query -> have_posts()) : $query -> the_post(); ?>
			<li class="col6">
				<?php if ( has_post_thumbnail() ): ?>
				<div class="related-thumbnail">
					<a class="image-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'square-thumbnail' ); ?></a>
				</div>
				<?php else: ?>
				<div class="related-thumbnail">
					<a class="image-link" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" alt="no image" width="120" height="120" /></a>
				</div>
				<?php endif; ?>
				<div class="related-date">
					<span class="post-meta small"><?php echo esc_html( get_the_date() ); ?></span>
					<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. '...' ;} else {echo $post->post_title;}?></a></h4>
				</div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php else:?>
		<p><?php _e( 'Not Related Post', 'emanon' ); ?></p>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</aside>
<!--end related post-->