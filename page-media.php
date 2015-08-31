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

			<?php while ( have_posts() ) : the_post(); ?>

				 <article <?php post_class('small-12 columns') ?> id="post-<?php the_ID(); ?>" role="main">
      			<div class="entry-content">
      				<?php 
        				 if (  post_password_required() ) {
        				  the_field('pre_password_text');
        				  the_content();
        				 } else {
          				 the_content();
        				    echo '<div class="media-content">';
        				    
        				    $files = get_field('files');
        				    
        				    if ( $files ) {
          				    echo '<h1>Files:</h1>';
          				    echo '<div class="row">';
          				    foreach ($files as $file) {
            				    echo '<div class="small-12 columns">'; ?>
            				     <p><b><?php echo $file['title'];?>:</b> <a href="<?php echo $file['file']; ?>" target="_blank">Download File</a></p>
            				   <?php
            				    echo '</div>';
          				    } // end foreach
          				    echo '</div>';
        				    }
        				    
        				    
        				    $images = get_field('images');
        				    
        				    if ( $images ) {
          				    echo '<h1>Images:</h1>';
          				    foreach ($images as $image) { ?>
          				    <div class="row">
            				    <div class="small-3 columns">
            				     <p><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="" /></p>
            				    </div>
            				    <div class="small-9 columns">
            				      <h3><?php echo $image['title']; ?></h3>
            				      <p><b>Download:</b> <a href="<?php echo $image['sizes']['large']; ?>" target="_blank">Medium Image</a> | <a href="<?php echo $image['url']; ?>" target="_blank">Large Image</a></p>
            				      <p><small><?php echo $image['description']; ?></small></p>
              				    <?php // print_r($image); ?>
            				    </div>
            				  </div>
          				   <?php
          				     } // end foreach
        				    }
        				    
        				    
        				    $videos = get_field('video');
        				    
        				    if ( $videos ) {
          				    echo '<h1>Video:</h1>';
          				    foreach ($videos as $video) { ?>
          				      <div class="row">
              				    <div class="small-5 columns"> 
              				      <h3><?php echo $video['title'];?></h3><br><a class="button small expand" href="<?php echo $video['download_link']; ?>" target="_blank">Download Video</a>
              				    </div>
              				    <div class="small-7 columns">
              				       <?php 
                                echo $video['youtube_link'];
                              ?>
              				    </div>
              				    <p>&nbsp;</p>
            				    </div>
            				    <?php
          				    } // end foreach
        				    }
        				  echo '</div>';
        				  } // end if passsword
        				?>      				
      			</div>
      		</article>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
