<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package starter 2
 */
?>

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
    
    
    	
		<?php 
  		$videos = get_field('videos');
  		
  		if($videos) {
    		echo '<h2>Videos</h2>';
    		echo'<div class="video-gallery">';
    		foreach ($videos as $video) { ?>
      		
      		<a class="fancybox-media" href="<?php echo $video['video_url']; ?>" rel="video" title="<?php echo $video['video_title']; ?>">         
        		<?php 
          	  $video_url = $video['video_url'];
          	  $video_url =  str_replace("https:","http:",$video_url);          	  
          	  $pos = strpos($video_url, 'youtube');
          	  
          	  if ($pos === false) {
            	  $url =  str_replace("http://youtu.be/","",$video_url);
  							$image = 'http://img.youtube.com/vi/' . $url . '/0.jpg';
          	  } else {
            	  $url =  str_replace("http://www.youtube.com/watch?v=","",$video_url);
  							$image = 'http://img.youtube.com/vi/' . $url . '/0.jpg';
          	  }
          	  
            ?>
        		
      		  <img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>">
      		  <h5><?php echo $video['video_title']; ?></h5>
      		  <p><?php echo $video['video_description']; ?></p>
      		</a>
        <?php
    		}
    		echo '</div>';
  		}  		
    ?>

    
		
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
