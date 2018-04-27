<?php
/**
* Template Sidebar Footer Area
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<div class="sidebar-footer" >
	<div class="container">
			<div class="col4 first">
				<?php dynamic_sidebar( 'footer-w-left' ); ?>
			</div>
			<div class="col4">
				<?php dynamic_sidebar( 'footer-w-center' ); ?>
			</div>
			<div class="col4">
				<?php dynamic_sidebar( 'footer-w-right' ); ?>
			</div>
	</div>
</div>
