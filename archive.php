<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter 2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
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
