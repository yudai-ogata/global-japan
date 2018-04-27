<?php
/**
* Header Mb Scroll Nav
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.1
*/
?>
<!--mb scroll nav-->
<div class="mb-scroll-nav">
	<div class="container">
		<div class="col12">
			<nav class="mb-scroll-arrow">
			<?php wp_nav_menu( array ( 'theme_location' => 'mb-scroll-nav','container' => false, 'fallback_cb' => '', 'menu_class' => 'mb-scroll-nav-inner') ); ?>
			</nav>
		</div>
	</div>
</div>
<!--end mb scroll nav-->