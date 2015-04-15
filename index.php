<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter 2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <h1>Latest News</h1>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          	<header class="entry-header">
          		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
          
          		<?php if ( 'post' == get_post_type() ) : ?>
          		<div class="entry-meta">
          			<?php starter_posted_on(); ?>
          		</div><!-- .entry-meta -->
          		<?php endif; ?>
          	</header><!-- .entry-header -->
          
          	<div class="entry-content">
          		<?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('thumbnail', array('class' => 'alignright'));
                }
          			the_content( sprintf(
          				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'starter' ),
          		  the_title( '<span class="screen-reader-text">"', '"</span>', false )
          			) );
          		?>
        
          	</div><!-- .entry-content -->
          </article><!-- #post-## -->
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
