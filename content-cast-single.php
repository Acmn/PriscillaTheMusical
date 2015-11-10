<?php
/**
 * @package starter 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cast-member'); ?>>
	<header class="entry-header">
  	<?php
  	if ( has_post_thumbnail() ) {
        the_post_thumbnail('cast-wide', array('class' => 'aligncenter'));
      } ?>
	</header><!-- .entry-header -->

	<div class="entry-content content-box">
  	<h1><?php the_title(); ?></h1>
		<h2><?php the_field('role'); ?></h2>
  	<?php 
      $twitter = get_field('twitter_handle'); 
      if($twitter) {
    ?>
      <p><i class="fa fa-twitter"></i> <a href="http://twitter.com/<?php echo $twitter; ?>" target="_blank">@<?php the_field('twitter_handle'); ?></a></p>
    <?php } ?>
    <?php
      the_content();
    ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->