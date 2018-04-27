<?php
/**
* Content Author
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/
?>
	<!--article-->
	<article class="article content-page">
		<?php while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="article-header">
				<h1><?php the_title(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
			</div>
			<?php if( has_post_thumbnail() ): ?>
			<div class="article-thumbnail">
			<?php the_post_thumbnail( 'large-thumbnail', array( 'itemprop' => 'image' ) ); ?>
			</div>
			<?php endif; ?>
		</header>
		<section class="article-body">
			<?php the_content(); ?>
			<!--user list-->
			<div <?php post_class( "clearfix" ); ?>>
				<?php $users = get_users( array( 'orderby' => 'ID' , 'order' => 'ASC' ) ); ?>
				<?php foreach($users as $user) {
				 $user_id = $user->ID; 
				 $user_display_name = $user->display_name;
				 $user_position = $user->user_position;
				 $user_description = $user->user_description; 
				 $user_twitter = $user->user_twitter;
				 $user_facebook = $user->user_facebook;
				 $user_googleplus =$user->user_googleplus;
				 $user_instagram = $user->user_instagram;
				 ?>
				<!--user profile-->
				<div class="user-profile">
					<div class="user-avatar">
					 <a href="<?php echo esc_url( home_url( '/' ) ); ?>?author=<?php echo $user_id ?>"><?php echo get_avatar( $user_id ,72, '', $user_display_name ); ?></a>
					</div>
					<div class="user-profile-content">
						<div class="user-name"><?php echo esc_html( $user_display_name ); ?><?php if( $user_position ){ ?><span class="user-position"><?php echo esc_html( $user_position ); ?></span><?php } ?></div>
						<p class="user-description"><?php echo nl2br( esc_html( $user_description ) ); ?></p>
						<span><i class="fa fa-angle-right"></i><a href="<?php echo esc_url( home_url( '/' ) ); ?>?author=<?php echo $user_id ?>"><?php _e( 'Post List', 'emanon' ); ?></a></span>
						<div class="user-sns">
							<?php if( $user_twitter || $user_facebook || $user_googleplus || $user_instagram ){ ?>
							<ul>
								<?php } ?>
								<?php if( $user_twitter ){ ?>
								<li class="follow_twitter"><a href="<?php echo $user_twitter ?>"><i class="fa fa-twitter"></i></a></li>
								<?php } ?>
								<?php if( $user_facebook ){ ?>
								<li class="follow_facebook"><a href="<?php echo $user_facebook ?>"><i class="fa fa-facebook"></i></a></li>
								<?php } ?>
								<?php if( $user_googleplus ){ ?>
								<li class="follow_googleplus"><a href="<?php echo $user_googleplus ?>"><i class="fa fa-google-plus"></i></a></li>
								<?php } ?>
								<?php if( $user_instagram ){ ?>
								<li class="follow_instagram"><a href="<?php echo $user_instagram ?>"><i class="fa fa-instagram"></i></a></li>
								<?php } ?>
								<?php if( $user_twitter || $user_facebook || $user_googleplus || $user_instagram){ ?>
							</ul>
							<?php } ?>
						</div>
					</div>
				</div>
				<!--end user profile-->
				<?php } ?>
			</div>
			<!--end user list-->
		</section>
		<footer class="article-footer">
			<?php if( is_emanon_exclude_ad_article() ): ?>
				<?php emanon_under_ad300(); ?>
			<?php endif; ?>
			<?php comments_template(); ?>
		</footer>
		<?php endwhile; ?>
		<?php if( is_emanon_exclude_cta_article() ): ?>
		<?php emanon_cta_page(); ?>
		<?php endif; ?>
	</article>
	<!--end article-->