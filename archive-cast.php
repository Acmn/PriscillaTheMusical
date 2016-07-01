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
  		<h1>Cast <!-- <a href="/creative-team">/ Creative</a> --></h1>
      <div class="news-gallery"> 
				<?php 
          // Call in Cast 
            $args = array(
              'posts_per_page'  => -1,
              'post_type'       => 'cast',
              'orderby'         => 'menu_order',
              'order'           => 'ASC',
             //'meta_key'        => 'principal_cast',
             // 'meta_value'      => true
            );            
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


				<?php get_template_part( 'content', 'cast' ); ?>


			<?php endwhile; // end of the loop. ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>