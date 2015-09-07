<?php
/**
 * The template for displaying the Front Page.
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
		<main id="main" class="site-main small-12 medium-12 large-8 columns" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
						<div class="waitlist-conatiner">
							<?php
								/* translators: %s: Name of current post */
								the_content( sprintf(
									__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'starter' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );
							?>

							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'starter' ),
									'after'  => '</div>',
								) );
							?>
						</div>
						<div class="featured-quote">
							<?php the_field('featured_quote'); ?>
						</div>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>