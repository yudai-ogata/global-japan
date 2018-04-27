<?php
/**
* Template header
* @package WordPress
* @subpackage Emanon_Free
* @since Emanon Free 1.0
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="keywords" content="<?php emanon_keywords(); ?>" >
<meta name="description" content="<?php emanon_description(); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php emanon_robots(); ?>
<?php emanon_facebook_opg(); ?>
<?php emanon_twitter_card(); ?>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
<?php emanon_google_tag_manager(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<?php emanon_google_tag_manager_noscript(); ?>
<?php emanon_google_analytics(); ?>
<?php emanon_fb_root(); ?>
<?php emanon_header_layout(); ?>
