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

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</header><!-- .entry-header -->
        
        	<div class="entry-content">
        		<?php the_content(); ?>
        		<?php 
          		$gallery = get_field('gallery');
          		
          		if($gallery) {
            		echo '<h2>Gallery</h2>';
            		echo'<div class="gallery">';
            		foreach ($gallery as $image) { ?>
              		
              		<a class="fancybox" href="<?php echo $image['sizes']['large']; ?>" rel="gallery" title="<?php echo $image['caption']; ?>">
              		  <img src="<?php echo $image['sizes']['cast-headshot']; ?>" alt="<?php echo $image['alt']; ?>">
              		</a>
                <?php
            		}
            		echo '</div>';
          		}
            ?>
        	</div><!-- .entry-content -->
        
        	<footer class="entry-footer">
        		<?php edit_post_link( __( 'Edit', 'starter' ), '<span class="edit-link">', '</span>' ); ?>
        	</footer><!-- .entry-footer -->
        </article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>