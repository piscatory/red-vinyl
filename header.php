<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Red Vinyl
 * @since Red Vinyl 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script>
WebFontConfig = { google: { families: [ 'Cabin:400,700,400italic,700italic:latin' ] } };
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'red-vinyl' ), max( $paged, $page ) );

?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<?php do_action( 'before' ); ?>
<header id="masthead" class="site-header" role="banner">
<hgroup>
<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</hgroup>
<nav role="navigation" class="site-navigation main-navigation">
<h1 class="assistive-text"><?php _e( 'Menu', 'red-vinyl' ); ?></h1>
<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'red-vinyl' ); ?>"><?php _e( 'Skip to content', 'red-vinyl' ); ?></a></div>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav><!-- .site-navigation .main-navigation -->
</header><!-- #masthead .site-header -->
<div id="main" class="site-main">