<?php
/**
* Post Navigation
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<!--pre nex-->
<?php the_post_navigation( array(
	'next_text' => '<span class="post-nav">' . __( 'Next page', 'emanon' ) . '<i class="fa fa-chevron-right"></i></span>' . '<span class="nav-title">%title</span>',
	'prev_text' => '<span class="post-nav"><i class="fa fa-chevron-left"></i>' . __( 'Previous page', 'emanon' ). '</span>' .'<span class="nav-title">%title</span>',
	) );?>
<!--end pre nex-->