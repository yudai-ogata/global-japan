<?php
/**
* SNS Buttons
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
	$url_encoded = urlencode( get_permalink() );
	$title_encoded = urlencode( get_the_title() .' | ' . get_bloginfo( 'name' ) );
?>
<!--share btn-->
<aside class="share-btn">
	<ul>
		<?php if ( is_emanon_display_twitter_btn() ): ?>
		<li class="twitter">
		<a href="http://twitter.com/intent/tweet?url=<?php echo $url_encoded; ?>&text=<?php echo $title_encoded; ?>&tw_p=tweetbutton" onclick="window.open(this.href, 'TWwindow', 'height=300, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa fa-twitter"></i><span class="sns-name">Twitter</span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_facebook_btn() ): ?>
		<li class="facebook">
		<a href="http://www.facebook.com/sharer.php?u=<?php echo $url_encoded; ?>&t=<?php echo $title_encoded; ?>" onclick="window.open( this.href,'FBwindow','height=450, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes'); return false;" ><i class="fa fa-facebook"></i><span class="sns-name">Facebook</span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_google_plus_btn() ): ?>
		<li class="googleplus">
		<a href="https://plus.google.com/share?url=<?php echo $url_encoded; ?>" onclick="window.open( this.href, 'GPwindow', 'height=450, width=650, menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa fa-google-plus"></i><span class="sns-name">Google+</span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_hatena_btn() ): ?>
		<li class="hatebu">
		<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>" onclick="window.open( this.href, 'HBwindow', 'height=350, width=510,menubar=no,toolbar=no,resizable=yes,scrollbars=yes');return false;"><i class="fa hatebu-icon"></i><span class="sns-name"><?php _e( 'hatebu', 'emanon' ); ?></span></a>
		</li>
		<?php endif; ?>
		<?php if ( is_emanon_display_pocket_btn() ): ?>
		<li class="pocket">
		<a href="http://getpocket.com/edit?url=<?php echo $url_encoded; ?>&title=<?php echo $title_encoded; ?>" onclick="window.open( this.href, 'PCwindow', 'height=350, width=550, scrollbars=yes,menubar=no,toolbar=no,resizable=yes,scrollbars=yes'); return false;" ><i class="fa fa-get-pocket"></i><span class="sns-name">Pocket</span></a></li>
		<?php endif; ?>
	</ul>
</aside>
<!--end share btn-->