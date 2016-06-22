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

	<div id="primary" class="content-area row">
		<main id="main" class="site-main site-page small-12 medium-12 large-8 columns" role="main">
      <h1><a href="/cast">Cast /</a><!-- Creative--></h1>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>        
        	<div class="entry-content">
        		<?php the_content(); ?>
        		<?php
        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . __( 'Pages:', 'starter' ),
        				'after'  => '</div>',
        			) );
        		?>
        	</div><!-- .entry-content -->
        
        	<footer class="entry-footer">
        		<?php edit_post_link( __( 'Edit', 'starter' ), '<span class="edit-link">', '</span>' ); ?>
        	</footer><!-- .entry-footer -->
        </article><!-- #post-## -->


<?php get_header(); ?>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>