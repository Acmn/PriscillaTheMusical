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
		<main id="main" class="site-main people-list" role="main">
      
			<?php while ( have_posts() ) : the_post(); ?>

        <section class="cast-member">
          <h1><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h1>
          <h2><?php the_field('role'); ?></h2>
          <p>Follow on Twitter: <a href="http://twitter.com/<?php the_field('twitter_handle'); ?>" target="_blank">@<?php the_field('twitter_handle'); ?></a></p>
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('cast-headshot', array('class' => 'alignleft'));
            } 
            
            the_excerpt();
          ?>
          <a href="<?php the_permalink();  ?>">Read More</a>
        </section>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
