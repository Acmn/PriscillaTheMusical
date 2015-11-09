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
  		<h1>NEWS</h1>
  		<div class="news-gallery">  
      <?php if ( have_posts() ) : ?>
      
      

			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>">
        		<?php 
          		
          		if ( has_post_thumbnail() ) {
                the_post_thumbnail('cast-headshot', array('class' => 'aligncenter'));
              }
            ?>
          </a>
          
          <div class="content-box"> 
            <?php
          		the_title( sprintf( '<h1 class="entry-title h4"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); 
        			the_excerpt();
        		?>
      		</div>
        </article><!-- #post-## -->
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>



