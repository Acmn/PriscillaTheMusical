<?php
/**
 * @package starter 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cast-member'); ?>>
	<header class="entry-header">
  	<?php
  	if ( has_post_thumbnail() ) {
    	echo '<a href="'.get_permalink().'">';
        the_post_thumbnail('cast-wide', array('class' => 'aligncenter'));
      echo '</a>';
      } ?>
	</header><!-- .entry-header -->

	<div class="entry-content content-box">
  	<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<h2><?php the_field('role'); ?></h2>
    <?php
      the_excerpt();
    ?>
    <?php 
      $twitter = get_field('twitter_handle'); 
      if($twitter) {
    ?>
      <i class="fa fa-twitter"></i> <a href="http://twitter.com/<?php echo $twitter; ?>" target="_blank">@<?php the_field('twitter_handle'); ?></a>
    <?php } ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


          
          
          

