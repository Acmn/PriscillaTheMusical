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
  		
  		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
					<div class="row">
          	<div class="small-12 medium-5 medium-push-7 columns">
            	<?php the_content(); ?>
          	</div>
        	  <div class="small-12 medium-7 medium-pull-5 columns">
          	  <?php the_field('the_form'); ?>
          		<?php
          			wp_link_pages( array(
          				'before' => '<div class="page-links">' . __( 'Pages:', 'starter' ),
          				'after'  => '</div>',
          			) );
          		?>
        	  </div>
        	</div>	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'starter' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
