
		  <?php 
		    if(get_field('facebook_url','options')) { ?>
		    <a class="social-icon facebook" data-social="facebook" href="<?php the_field('facebook_url','options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		  <?php 
		    }
		      
		    if(get_field('twitter_url','options')) {
		  ?>
		    <a class="social-icon twitter" data-social="twitter" href="<?php the_field('twitter_url','options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
		  <?php 
		    }
		      
		    if(get_field('instagram_url','options')) {
		  ?>
		    <a class="social-icon instagram" data-social="instagram" href="<?php the_field('instagram_url','options'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
		  <?php 
		    }
		      
		    if(get_field('youtube_url','options')) {
		  ?>
		    <a class="social-icon youtube" data-social="youtube" href="<?php the_field('youtube_url','options'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
		  <?php 
		    }
		      
		    if(get_field('gplus_url','options')) {
		  ?>
		    <a class="social-icon gplus" data-social="googlePlus" href="<?php the_field('gplus_url','options'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
		  <?php 
		    }
		  ?>
