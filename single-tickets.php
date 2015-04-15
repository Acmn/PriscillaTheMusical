<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package starter 2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
  			the_post();
  			
  			echo '<h1 class="tickets-heading">Tickets '.get_the_title().'</h1>';
  			
  			the_content();
  			
  			get_template_part( 'partials/tickets', 'container' ); 
  		?>
  		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
