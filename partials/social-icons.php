
		  <?php 
		    if(get_field('facebook_url','options')) { ?>
		    <a class="facebook" href="<?php the_field('facebook_url','options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		  <?php 
		    }
		      
		    if(get_field('twitter_url','options')) {
		  ?>
		    <a class="twitter" href="<?php the_field('twitter_url','options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
		  <?php 
		    }
		      
		    if(get_field('instagram_url','options')) {
		  ?>
		    <a class="instagram" href="<?php the_field('instagram_url','options'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
		  <?php 
		    }
		      
		    if(get_field('youtube_url','options')) {
		  ?>
		    <a class="youtube" href="<?php the_field('youtube_url','options'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
		  <?php 
		    }
		      
		    if(get_field('gplus_url','options')) {
		  ?>
		    <a class="gplus" href="<?php the_field('gplus_url','options'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
		  <?php 
		    }
		  ?>
