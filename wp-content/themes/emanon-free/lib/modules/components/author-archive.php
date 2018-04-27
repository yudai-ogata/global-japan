<?php
/**
* Author Profile Archive
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/
 $user_display_name = get_the_author_meta( 'display_name' );
 $user_position = get_the_author_meta( 'user_position' );
 $user_description = get_the_author_meta( 'user_description') ;
 $user_twitter = get_the_author_meta( 'user_twitter' );
 $user_facebook = get_the_author_meta( 'user_facebook') ;
 $user_googleplus = get_the_author_meta( 'user_googleplus' );
 $user_instagram = get_the_author_meta( 'user_instagram' );
?>
<!--author profile-->
<div class="author-archive">
	<div class="author-profile-content">
		<div class="avatar">
		 <?php echo get_avatar( get_the_author_meta( 'ID' ), 96, '', $user_display_name ); ?>
		</div>
		<div class="author-profile-text">
			<?php if( $user_position ){ ?>
			<span><?php echo esc_html( $user_position ); ?></span>
			<?php } ?>
			<?php if( $user_description ){ ?>
			<p><?php echo esc_html( $user_description ); ?></p>
			<?php } ?>
			<div class="author-sns">
				<?php if( $user_twitter || $user_facebook || $user_googleplus || $user_instagram){ ?>
				<ul>
					<?php } ?>
					<?php if( $user_twitter ){ ?>
					<li class="follow_twitter"><a href="<?php echo $user_twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php } ?>
					<?php if( $user_facebook ){ ?>
					<li class="follow_facebook"><a href="<?php echo $user_facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<?php if( $user_googleplus ){ ?>
					<li class="follow_googleplus"><a href="<?php echo $user_googleplus ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<?php } ?>
					<?php if( $user_instagram ){ ?>
					<li class="follow_instagram"><a href="<?php echo $user_instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<?php } ?>
					<?php if( $user_twitter || $user_facebook || $user_googleplus || $user_instagram){ ?>
				</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!--end author profile-->