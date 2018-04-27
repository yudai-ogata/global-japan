<?php
/**
* Theme Inline Style
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
function emnanon_custom_css() {
	/*---general panel--*/
	$main_color = get_theme_mod( 'main_color', '#161410' );
	$link_color = get_theme_mod( 'link_color', '#9b8d77' );
	$link_hover = get_theme_mod( 'link_hover', '#b5b5b5' );
	$footer_background_color = get_theme_mod( 'footer_background_color', '#232323' );
	$footer_text_color = get_theme_mod( 'footer_text_color', '#b5b5b5' );
	$footer_link_hover = get_theme_mod( 'footer_link_hover', '#fff' );
	$btn_background_color = get_theme_mod( 'btn_background_color', '#9b8d77' );
	$btn_text_color = get_theme_mod( 'btn_text_color', '#fff' );
	/*---header panel--*/
	$header_area_height = get_theme_mod( 'header_area_height', 96 );
	$header_background_image = get_theme_mod( 'header_background_image', '' );
	$header_logo_height = get_theme_mod( 'header_logo_height', 50 );
	$header_logo_height_mobile = get_theme_mod( 'header_logo_height_mobile', 40 );
	$header_description_background_color = get_theme_mod( 'header_description_background_color', '#f8f8f8' );
	$header_description_text_color = get_theme_mod( 'header_description_text_color', '#000c15' );
	$header_background_color = get_theme_mod( 'header_background_color', '#fff' );
	$header_title_color = get_theme_mod( 'header_title_color', '#000c15' );
	$global_nav_color = get_theme_mod( 'global_nav_color', '#000c15' );
	$tracking_header_logo_height = get_theme_mod( 'tracking_header_logo_height', 40 );
	$global_nav_design_type = get_theme_mod( 'global_nav_design_type', 'default' );
	$display_mb_scroll_arrow = get_theme_mod( 'display_mb_scroll_arrow', '' );
	/*---content panel--*/
	$display_related_post = get_theme_mod( 'display_related_post', true );
	/*---front page panel--*/
	$firstview_type = get_theme_mod( 'firstview_layout', 'no_display' );
	$featured_image = get_theme_mod( 'featured_image', get_theme_file_uri() . '/lib/images/emanon-header-img.jpg' );
	$featured_section_background_color = get_theme_mod( 'featured_section_background_color', '#e8edf8' );
	$featured_background_image_opacity = get_theme_mod( 'featured_background_image_opacity', 1 );
	$featured_image_blur = get_theme_mod( 'featured_image_blur', 0 );
	$featured_display_overlay = get_theme_mod( 'featured_display_overlay', 'pattern_none' );
	/*---template panel--*/
	$display_read_more = get_theme_mod( 'display_read_more', true );
	$read_more_type = get_theme_mod( 'read_more_type', 'read_more' );
	/*---cta panel--*/
	$display_cta_single = get_theme_mod( 'display_cta_single', '' );
	$cta_common_layout_type = get_theme_mod( 'cta_common_layout_type', 'cta_post_left' );
	$cta_common_background_color = get_theme_mod( 'cta_common_background_color', '#fff' );
	$cta_common_title_color = get_theme_mod( 'cta_common_title_color', '#000c15' );
	$cta_common_text_color = get_theme_mod( 'cta_common_text_color', '#303030' );
	$cta_common_btn_background_color = get_theme_mod( 'cta_common_btn_background_color', '#9b8d77' );
	$cta_common_btn_text_color = get_theme_mod( 'cta_common_btn_text_color', '#fff' );
	/*--page custom css--*/
	$emanon_custom_css_setting = post_custom( 'emanon_custom_css_setting' );
	/*--general panel color scheme--*/
	if ( $color_scheme = get_theme_mod( 'color_scheme', '' ) ) {
	$colors = explode( ",", $color_scheme );
	$main_color = $colors[0];
	$link_color = $colors[1];
	$link_hover = $colors[2];
	}
?>
<style>
/*---main color--*/
#gnav,.global-nav li ul li,.mb-scroll-nav{background-color:<?php echo $main_color; ?>;}
.fa,.required{color:<?php echo $main_color; ?>;}
#wp-calendar a{color:<?php echo $main_color; ?>;font-weight: bold;}
.cat-name, .sticky .cat-name{background-color:<?php echo $main_color; ?>;}
.pagination a:hover,.pagination .current{background-color:<?php echo $main_color;?>;border:solid 1px <?php echo $main_color; ?>;}
.side-widget-title span,.entry-header span,.archive-title h1 > span{border-bottom:solid 1px <?php echo $main_color; ?>;}
.wpp-list li:before{background-color:<?php echo $main_color;?>;}
/*--link color--*/
#gnav .global-nav .current-menu-item > a,#gnav .global-nav .current-menu-item > a .fa,#modal-global-nav-container .current-menu-item a,#modal-global-nav-container .sub-menu .current-menu-item a,.side-widget .current-menu-item a,.mb-scroll-nav-inner .current-menu-item a,.entry-title a:active,.pagination a,.post-nav .fa{color:<?php echo $link_color; ?>;}
.global-nav-default > li:first-child:before, .global-nav-default > li:after{background-color:<?php echo $link_color; ?>;}
.modal-menu .modal-gloval-icon-bar{background-color:<?php echo $link_color; ?>;}
.article-body a{color:<?php echo $link_color; ?>;}
.next-page span{background-color:<?php echo $link_hover; ?>;color:#fff;}
.next-page a span {background-color:#fff;color:<?php echo $link_color; ?>;}
.comment-page-link .page-numbers{background-color:#fff;color:<?php echo $link_color; ?>;}
.comment-page-link .current{background-color:<?php echo $link_hover; ?>;color:#fff;}
.side-widget li a:after{color:<?php echo $link_color; ?>;}
/*--link hover--*/
a:hover, .header-site-name a:hover, .global-nav a:hover, .side-widget a:hover, .side-widget li a:hover:before, .header-follow-btn a:hover .fa, #wp-calendar a:hover, .entry-title a:hover, .footer-follow-btn a:hover .fa{color:<?php echo $link_hover; ?>;}
.scroll-nav-inner li:after{background-color:<?php echo $link_hover; ?>;}
.featured-title h2:hover{color:<?php echo $link_hover; ?>;}
.next-page a span:hover{background-color:<?php echo $link_hover; ?>;color:#fff;}
.comment-page-link .page-numbers:hover{background-color:<?php echo $link_hover; ?>;color:#fff;}
.tagcloud a:hover{border:solid 1px <?php echo $link_hover;?>;color:<?php echo $link_hover; ?>;}
blockquote a:hover, .box-default a:hover, .box-info a:hover{color:<?php echo $link_hover;?>;}
#modal-global-nav-container .global-nav-default li a:hover{color:<?php echo $link_hover;?>;}
.side-widget li a:hover:after{color:<?php echo $link_hover;?>;}
.widget-contact a:hover .fa{color:<?php echo $link_hover;?>;}
#sidebar-cta {border:solid 4px <?php echo $link_hover; ?>;}
/*--btn color--*/
.btn-more{background-color:<?php echo $btn_background_color; ?>;border:solid 1px <?php echo $btn_background_color; ?>;}
.btn a{background-color:<?php echo $btn_background_color; ?>;color:<?php echo $btn_text_color; ?>;}
.btn a:hover{color:<?php echo $btn_text_color; ?>;}
.btn-border{display:block;padding:8px 16px;border:solid 1px <?php echo $btn_background_color; ?>;}
.btn-border .fa{color:<?php echo $btn_background_color; ?>;}
.btn-border:hover{background-color:<?php echo $btn_background_color; ?>;}
input[type=submit]{background-color:<?php echo $btn_background_color; ?>;color:<?php echo $btn_text_color; ?>;}
blockquote a, .box-default a, .box-info a{color:<?php echo $btn_background_color; ?>;}
/*--header-*/
.header,.header-logo,.header-widget{height:<?php echo $header_area_height; ?>px;}
.header, .header-col-line #gnav{background-color:<?php echo $header_background_color; ?>;}
.header-site-name{line-height:<?php echo $header_area_height; ?>px;}
.header-site-name a{color:<?php echo $header_title_color; ?>;}
.header-col-line {height:80px;}
.header-col-line .header-site-name{line-height: 80px;}
/*--h2-*/
.article-body h2 {border-left:solid 4px <?php echo $main_color;?>;}
/*--h3-*/
.article-body h3 {border-bottom:solid 2px <?php echo $main_color;?>;}
<?php if ( $header_description_background_color == '#f8f8f8' ): ?>
.top-bar{background-color:<?php echo $header_description_background_color; ?>;}
<?php else: ?>
.top-bar{background-color:<?php echo $header_description_background_color; ?>;border-bottom:solid 1px <?php echo $header_description_background_color; ?>;}
<?php endif; ?>
<?php if ( $header_background_image ): ?>
#header-wrapper{background-image:url(<?php echo $header_background_image; ?>);background-size: cover;}
.top-bar{background-color:inherit;border-bottom:none;}
.header,.header-col-line #gnav {background-color:inherit;}
<?php endif; ?>
.top-bar h1,.top-bar p{color:<?php echo $header_description_text_color; ?>;}
.header-logo img, .modal-header-logo img{max-height:<?php echo $header_logo_height_mobile; ?>px;}
@media screen and ( min-width: 768px ) {
.header-logo img{max-height:<?php echo $header_logo_height; ?>px;}
}
.global-nav-line li a {color:<?php echo $global_nav_color; ?>;}
.scroll-nav .header-logo img{max-height:<?php echo $tracking_header_logo_height; ?>px;}
<?php if ( $global_nav_design_type == 'tracking' ): ?>
/*--scroll nav design--*/
@media screen and ( min-width: 992px ) {
.nav-fixed{display:block;position:fixed;top:0;width:100%;box-shadow:0px 0px 2px 1px rgba(0, 0, 0, 0.1);z-index:9999;}
.widget-fixed {margin-top:56px;}
}
<?php endif; ?>
/*--modal menu--*/
.modal-gloval-btn{position:absolute;top:50%;right:8px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:999;}
.modal-menu .modal-gloval-icon{float:left;margin-bottom:6px;}
.modal-menu .slicknav_no-text{margin:0;}
.modal-menu .modal-gloval-icon-bar{display:block;width:32px;height:3px;border-radius:4px;-webkit-transition:all 0.2s;transition:all 0.2s;}
.modal-gloval-btn .modal-gloval-icon-bar + .modal-gloval-icon-bar{margin-top:6px;}
.modal-menu .modal-menutxt{display:block;text-align:center;font-size:12px;font-size:1.2rem;color:#000c15;}
<?php if ( $display_mb_scroll_arrow ): ?>
/*--mb scroll arrow -*/
.mb-scroll-arrow>ul:after{position:absolute;right:6px;top:0;font-family:fontawesome;content:"\f105";font-size:30px;font-size:3rem;text-shadow:0 0 6px rgba(0,0,0,.6);color:#fff;opacity:.9;z-index:1;-webkit-animation:mb-scrollnav-transform 1.8s infinite ease-in-out;animation:mb-scrollnav-transform 1.8s infinite ease-in-out}
<?php endif; ?>
<?php if ( $firstview_type == 'featured' ): ?>
/*--featured section--*/
.featured{position:relative;overflow:hidden;background-color:<?php echo $featured_section_background_color; ?>;}
.featured:before{position:absolute;content:"";top:0;right:0;bottom:0;left:0;background-image:url(<?php echo $featured_image; ?>);background-position:center;background-size:cover;background-repeat:no-repeat;opacity:<?php echo $featured_background_image_opacity; ?>;-webkit-filter:blur(<?php echo $featured_image_blur; ?>px);filter: blur(<?php echo $featured_image_blur; ?>px);-webkit-transform: translate(0);transform: translate(0);}
<?php if ( $featured_display_overlay == 'pattern_dots' ): ?>
.featured-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-dots.png);margin:auto;z-index:200;}
<?php elseif( $featured_display_overlay == 'pattern_diamond' ): ?>
.featured-overlay{position: absolute;top:0;left:0;right:0;bottom:0;background:url(<?php echo get_template_directory_uri() ?>/lib/images/overlay-diamond.png);margin:auto;z-index:200;}
<?php endif; ?>
<?php endif; ?>
/*--slick slider for front page & LP--*/
.slick-slider{-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:rgba(0,0,0,0)}
.slick-list,.slick-slider{display:block;position:relative}
.slick-list{overflow:hidden;margin:0;padding:0}
.slick-list:focus{outline:0}
.slick-list.dragging{cursor:pointer;cursor:hand}
.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.slick-track{display:block;position:relative;top:0;left:0;margin:40px 0}
.slick-track:after,.slick-track:before{display:table;content:''}
.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}
.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir='rtl']
.slick-slide{float:right}
.slick-slide.slick-loading img{display:none}
.slick-slide.dragging img{pointer-events:none}
.slick-initialized .slick-slide{display:block}
.slick-loading .slick-slide{visibility:hidden}
.slick-vertical .slick-slide{display:block;height:auto;border:solid 1px transparent}
.slick-arrow.slick-hidden{display:none}
.slick-next:before,.slick-prev:before{content:""}
.slick-next{display:block;position:absolute;top:50%;right:-11px;padding:0;width:16px;height:16px;border-color:<?php echo $link_color;?>;border-style:solid;border-width:2px 2px 0 0;background-color:transparent;cursor:pointer;text-indent:-9999px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}
.slick-prev{display:block;position:absolute;top:50%;left:-11px;padding:0;width:16px;height:16px;border-color:<?php echo $link_color;?>;border-style:solid;border-width:2px 2px 0 0;background-color:transparent;cursor:pointer;text-indent:-9999px;-webkit-transform:rotate(-135deg);-moz-transform:rotate(-135deg);-ms-transform:rotate(-135deg);-o-transform:rotate(-135deg);transform:rotate(-135deg)}
@media screen and ( min-width: 768px ) {
.slick-next{right:-16px;}
.slick-prev{left:-16px;}
}
<?php if ( $display_read_more ): ?>
/*--read more--*/
.archive-header{padding:8px 16px 64px 16px;}
.read-more{position:absolute;right: 0;bottom:24px;left:0;text-align:center;}
.read-more .fa{margin:0 0 0 4px;-webkit-transition:0.4s ease-in-out;transition:0.4s ease-in-out;}
.read-more a:hover .fa{color:#fff;}
.featured-date .read-more,.home .big-column .read-more,.archive .ar-big-column .read-more{position:absolute;right:0;bottom:32px;left:0;}
.home .big-column .btn-mid,.archive .ar-big-column .btn-mid{width: 80%;}
@media screen and ( min-width: 768px ) {
.archive-header {padding:8px 16px 72px 16px;}
.home .one-column .read-more,.archive .ar-one-column .read-more,.search .ar-one-column .read-more{position:absolute;right:16px;bottom:20px;left:auto;}
.blog .one-column .read-more,.archive .ar-one-column .read-more,.search .ar-one-column .read-more{position:absolute;right:16px;bottom:20px;left:auto;}
.home .big-column .btn-mid,.archive .ar-big-column .btn-mid,.search .ar-big-column .btn-mid{width:20%;}
.blog .big-column .btn-mid,.archive .ar-big-column .btn-mid,.search .ar-big-column .btn-mid{width:20%;}
.home .one-column .read-more .btn-border,.archive .ar-one-column .read-more .btn-border,.search .ar-one-column .read-more .btn-border{display:inline;}
.blog .one-column .read-more .btn-border,.archive .ar-one-column .read-more .btn-border,.search .ar-one-column .read-more .btn-border{display:inline;}
}
<?php endif; ?>
<?php if ( $read_more_type == 'read_more_post_title' ): ?>
.read-more:after{padding-left:4px;content:"\f105";font-family:FontAwesome;color:<?php echo $main_color; ?>;}
<?php endif; ?>
<?php if ( $display_cta_single ): ?>
/*--post cta--*/
.cta-post{border-top:solid 5px <?php echo $main_color; ?>;border-bottom:solid 5px <?php echo $main_color; ?>;}
/*--post cta common--*/
.cta-common-background{background-color:<?php echo $cta_common_background_color; ?>;}
.cta-common-title h3{color:<?php echo $cta_common_title_color; ?>;}
.cta-common-text, .cta-common-text h3, .cta-common-text h4, .cta-common-text h5, .cta-common-text h6{color:<?php echo $cta_common_text_color; ?>;}
.cta-common-btn a{background-color:<?php echo $cta_common_btn_background_color;?>;color:<?php echo $cta_common_btn_text_color; ?>;}
.cta-common-btn input[type=submit]{background-color:<?php echo $cta_common_btn_background_color;?>;color:<?php echo $cta_common_btn_text_color; ?>;border-top:solid  2px rgba(255,255,255,0.2);border-bottom:solid 4px rgba(0,0,0,0.2);}
@media screen and ( min-width: 768px ) {
<?php if ( $cta_common_layout_type == 'cta_post_left' ): ?>
.cta-common-image{float:left;padding-right:4%;width:50%}
<?php elseif( $cta_common_layout_type == 'cta_post_center' ): ?>
.cta-common-image{width:100%;}
<?php elseif( $cta_common_layout_type == 'cta_post_right' ): ?>
.cta-common-image{float:right;padding-left:4%;width:50%}
<?php endif; ?>
}
<?php endif; ?>
/*--remodal's necessary styles--*/
html.remodal-is-locked{overflow:hidden;-ms-touch-action:none;touch-action:none}
.remodal,[data-remodal-id]{display:none}
.remodal-overlay{position:fixed;z-index:9998;top:-5000px;right:-5000px;bottom:-5000px;left:-5000px;display:none}
.remodal-wrapper{position:fixed;z-index:9999;top:0;right:0;bottom:0;left:0;display:none;overflow:auto;text-align:center;-webkit-overflow-scrolling:touch}
.remodal-wrapper:after{display:inline-block;height:100%;margin-left:-0.05em;content:""}
.remodal-overlay,.remodal-wrapper{-webkit-backface-visibility:hidden;backface-visibility:hidden}
.remodal{position:relative;outline:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;text-size-adjust:100%}
.remodal-is-initialized{display:inline-block}
/*--remodal's default mobile first theme--*/
.remodal-bg.remodal-is-opened,.remodal-bg.remodal-is-opening{-webkit-filter:blur(3px);filter:blur(3px)}.remodal-overlay{background:rgba(43,46,56,.9)}
.remodal-overlay.remodal-is-closing,.remodal-overlay.remodal-is-opening{-webkit-animation-duration:0.3s;animation-duration:0.3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}
.remodal-overlay.remodal-is-opening{-webkit-animation-name:c;animation-name:c}
.remodal-overlay.remodal-is-closing{-webkit-animation-name:d;animation-name:d}
.remodal-wrapper{padding:16px}
.remodal{box-sizing:border-box;width:100%;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);color:#2b2e38;background:#fff;}
.remodal.remodal-is-closing,.remodal.remodal-is-opening{-webkit-animation-duration:0.3s;animation-duration:0.3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}
.remodal.remodal-is-opening{-webkit-animation-name:a;animation-name:a}
.remodal.remodal-is-closing{-webkit-animation-name:b;animation-name:b}
.remodal,.remodal-wrapper:after{vertical-align:middle}
.remodal-close{position:absolute;top:-32px;right:0;display:block;overflow:visible;width:32px;height:32px;margin:0;padding:0;cursor:pointer;-webkit-transition:color 0.2s;transition:color 0.2s;text-decoration:none;color:#fff;border:0;outline:0;background:<?php echo $cta_popup_title_header_color; ?>;}
.modal-global-nav-close{position:absolute;top:0;right:0;display:block;overflow:visible;width:32px;height:32px;margin:0;padding:0;cursor:pointer;-webkit-transition:color 0.2s;transition:color 0.2s;text-decoration:none;color:#fff;border:0;outline:0;background:<?php echo $link_color; ?>;}
.remodal-close:focus,.remodal-close:hover{color:#2b2e38}
.remodal-close:before{font-family:Arial,Helvetica CY,Nimbus Sans L,sans-serif!important;font-size:32px;line-height:32px;position:absolute;top:0;left:0;display:block;width:32px;content:"\00d7";text-align:center;}
.remodal-cancel,.remodal-confirm{font:inherit;display:inline-block;overflow:visible;min-width:110px;margin:0;padding:9pt 0;cursor:pointer;-webkit-transition:background 0.2s;transition:background 0.2s;text-align:center;vertical-align:middle;text-decoration:none;border:0;outline:0}
.remodal-confirm{color:#fff;background:#81c784}
.remodal-confirm:focus,.remodal-confirm:hover{background:#66bb6a}
.remodal-cancel{color:#fff;background:#e57373}
.remodal-cancel:focus,.remodal-cancel:hover{background:#ef5350}
.remodal-cancel::-moz-focus-inner,.remodal-close::-moz-focus-inner,.remodal-confirm::-moz-focus-inner{padding:0;border:0}
@-webkit-keyframes a{0%{-webkit-transform:scale(1.05);transform:scale(1.05);opacity:0}to{-webkit-transform:none;transform:none;opacity:1}}
@keyframes a{0%{-webkit-transform:scale(1.05);transform:scale(1.05);opacity:0}to{-webkit-transform:none;transform:none;opacity:1}}
@-webkit-keyframes b{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}to{-webkit-transform:scale(0.95);transform:scale(0.95);opacity:0}}
@keyframes b{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}to{-webkit-transform:scale(0.95);transform:scale(0.95);opacity:0}}
@-webkit-keyframes c{0%{opacity:0}to{opacity:1}}
@keyframes c{0%{opacity:0}to{opacity:1}}
@-webkit-keyframes d{0%{opacity:1}to{opacity:0}}
@keyframes d{0%{opacity:1}to{opacity:0}}
@media only screen and (min-width:641px){.remodal{max-width:700px}}.lt-ie9 .remodal-overlay{background:#2b2e38}.lt-ie9 .remodal{width:700px}
/*--footer--*/
.footer{color:<?php echo $footer_text_color; ?>;background-color:<?php echo $footer_background_color; ?>;}
.footer a,.footer .fa{color:<?php echo $footer_text_color; ?>;}
.footer a:hover{color:<?php echo $footer_link_hover; ?>;}
.footer a:hover .fa{color:<?php echo $footer_link_hover; ?>;}
.footer-nav li{border-right:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box h2,.footer-widget-box h3,.footer-widget-box h4,.footer-widget-box h5,.footer-widget-box h6{color:<?php echo $footer_text_color; ?>;}
.footer-widget-box h3{border-bottom:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box a:hover .fa<?php echo $footer_link_hover; ?>;}
.footer-widget-box #wp-calendar caption{border:solid 1px <?php echo $footer_text_color; ?>;border-bottom: none;}
.footer-widget-box #wp-calendar th{border:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box #wp-calendar td{border:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box #wp-calendar a:hover{color:<?php echo $footer_link_hover; ?>;}
.footer-widget-box .tagcloud a{border:solid 1px <?php echo $footer_text_color; ?>;}
.footer-widget-box .tagcloud a:hover{border:solid 1px <?php echo $footer_link_hover; ?>;}
.footer-widget-box .wpp-list .wpp-excerpt, .footer-widget-box .wpp-list .post-stats, .footer-widget-box .wpp-list .post-stats a{color:<?php echo $footer_text_color; ?>;}
.footer-widget-box .wpp-list a:hover{color:<?php echo $footer_link_hover; ?>;}
.footer-widget-box select{border:solid  1px <?php echo $footer_text_color; ?>;color:<?php echo $footer_text_color; ?>;}
.footer-widget-box .widget-contact a:hover .fa{color:<?php echo $footer_link_hover; ?>;}
@media screen and ( min-width: 768px ) {.footer a:hover .fa{color:<?php echo $footer_text_color; ?>;}}
/*--page custom css--*/
<?php echo $emanon_custom_css_setting; ?>
</style>
<?php
}
add_action( 'wp_head', 'emnanon_custom_css' );