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
<link href='https://fonts.googleapis.com/css?family=Varela+Round|Dancing+Script:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NJKZ5D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJKZ5D');</script>
<!-- End Google Tag Manager -->

<div id="page" class="hfeed page-wrapper">
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
