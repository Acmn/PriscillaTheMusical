<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package starter 2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<a class="skip-link screen-reader-text " href="#content"><?php _e( 'Skip to content', 'starter' ); ?></a>				
	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="site-branding small-12 medium-12 large-8 columns">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>
			</div><!-- .site-branding -->
			
			<div class="show-for-large-up social-icons small-12 medium-12 large-4 columns"><?php get_template_part( 'partials/social', 'icons' ); ?></div>
		</div>
		
		<?php
  		//Flat Menu
  		//get_template_part( 'partials/flat', 'menu' ); 
  		
  		//Top Menu
  		//get_template_part( 'partials/top', 'bar' ); 
		?>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
	<div class="site">
