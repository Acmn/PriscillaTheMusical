<?php
/**
 * The template for displaying cast.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package starter 2
 */

get_header(); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main site-page small-12 medium-12 large-8 columns" role="main">
  		<h1>Cast <a href="/creative-team">/ Creative</a></h1>
      <div class="news-gallery"> 
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'cast' ); ?>


			<?php endwhile; // end of the loop. ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>