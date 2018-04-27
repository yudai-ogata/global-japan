<?php
/**
* Header Scroll Nav
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/

?>
<!--scroll nav-->
<div class="scroll-nav wow fadeInDown" data-wow-duration="1s">
	<div class="container">
		<div class="col4 first">
			<?php emanon_header_logo(); ?>
		</div>
		<div class="col8">
			<nav class="scroll-nav-inner">
			<?php wp_nav_menu( array ( 'theme_location' => 'scroll-nav','container' => false, 'fallback_cb' => '', 'depth' => '1', 'menu_class' => 'global-nav global-nav-scroll') ); ?>
			</nav>
		</div>
		</div>
</div>
<!--end scroll nav-->