<?php
/**
 * The template for displaying the Front Page.
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
		<main id="main" class="site-main small-12 medium-12 large-8 columns" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
  					<img src="<?php bloginfo('template_url'); ?>/img/build/front-logo2.png" alt="front-logo" />
  					
  					<?php $video = get_field('video'); 
    					if ($video) {
  					?>
  					
  					<div class="front-video text-center"> 
  					  <a class="fancybox-media" href="<?php echo $video; ?>"><img src="<?php bloginfo('template_url'); ?>/img/build/video-button.png" alt="video-button"/></a>
  					</div>
  					
  					<?php } ?>
  					
              <article id="post-<?php the_ID(); ?>" <?php post_class('tickets-box'); ?>>
              	<header class="entry-header" id="tickets">
              		<h1>BUY TICKETS</h1>
              	</header><!-- .entry-header -->
              
              	<div class="entry-content" id="ticketsPage">
              		
              		<h2>
                		<?php 
                  		the_field('theatre');
                  		echo '<br>';
                  		the_field('date');
                    ?>
              		</h2>
              		
              		<h3>
                		<?php the_field('info_theatre'); ?>
              		</h3>
              		
              		<p><a href="<?php the_field('tickets_link'); ?>" class="ticket-button button" target="_blank">Book Now</a></p>
              		
              		<p><span>Or</span> call <?php the_field('phone'); ?> <span>or</span> <a href="<?php the_field('outlet_link'); ?>">Locate an outlet</a>.</p>
              		
              		<h2>
                		<?php the_field('groups_heading'); ?>
              		</h2>
              		
              		<p>Phone <?php the_field('groups_phone'); ?></p>
              		
              	</div><!-- .entry-content -->
                
                <div class="performance-times">
                  <h4><?php the_field('show_times_heading'); ?></h4>
                  <div class="performance-times-flex">
                    <?php 
                      $times = get_field('performance_times');
                      foreach( $times as $time) {
                        echo '<div>';
                          echo '<b>'.$time['day'].'</b></br>';
                          echo $time['time'];
                        echo '</div>';
                      }
                    ?>
                  </div>
                  <?php the_field('time_notes'); ?>
                </div>
                <?php
                $special_heading2 = get_field('special_heading2');  
                if ($special_heading2) { ?>
                  <section class="special">
                    <div class="row">
                      <div class="small-10 small-centered columns entry-content">
                        <h4><b><?php echo $special_heading2; ?></b></h4>
                        <?php 
                          $info2 = get_field('special_info2'); 
                          if ($info2) {
                            echo $info2;
                          }
                          
                          $special_link = get_field('special_link2');
                          
                          if ($special_link) {
                            echo '<a href="'.$special_link.'" class="ticket-button button" target="_blank" data-city="'.$tickets.'" data-title="'.$special_heading.'">'.get_field('special_button_text').'</a>';
                          }
                        ?>
                        
                      </div>
                    </div>  
                  </section>
                <?php   
                }
                ?>
                <?php
                $special_heading3 = get_field('special_heading3');  
                if ($special_heading3) { ?>
                  <section class="special">
                    <div class="row">
                      <div class="small-10 small-centered columns entry-content">
                        <h4><b><?php echo $special_heading3; ?></b></h4>
                        <?php 
                          $info3 = get_field('special_info3'); 
                          if ($info3) {
                            echo $info3;
                          }
                          
                          $special_link3 = get_field('special_link3');
                          
                          if ($special_link3) {
                            echo '<a href="'.$special_link3.'" class="ticket-button button" target="_blank" data-city="'.$tickets.'" data-title="'.$special_heading.'">'.get_field('special_button_text').'</a>';
                          }
                        ?>
                        
                      </div>
                    </div>  
                  </section>
                <?php   
                }
                ?>
                <?php
                $special_heading = get_field('special_heading');  
                if ($special_heading) { ?>
                  <section class="special">
                    <div class="row">
                      <div class="small-12 columns entry-content">
                        <h4><b><?php echo $special_heading; ?></b></h4>
                        <?php 
                          $info = get_field('special_info'); 
                          if ($info) {
                            echo $info;
                          }
                          
                          $special_link = get_field('special_link');
                          
                          if ($special_link) {
                            echo '<a href="'.$special_link.'" class="ticket-button button" target="_blank" data-city="'.$tickets.'" data-title="'.$special_heading.'">'.get_field('special_button_text').'</a>';
                          }
                        ?>
                        
                      </div>
                    </div>  
                  </section>
                <?php   
                }
                ?>
                <!-- SPONSORS -->
                <?php 
                $sponsors = get_field('sponsors');
                  if($sponsors) {
                    echo '<div class="sponsors tickets-section">';
                      foreach ($sponsors as $sponsor) { ?>
                        <div class="sponsor">
                          <a class="link-sponsor" href="<?php echo $sponsor['link']; ?>" data-title="<?php echo $sponsor['title']; ?>" data-city="Auckland" target="_blank">
                            <img src="<?php echo $sponsor['image']; ?>" alt="<?php echo $sponsor['title']; ?>">

                          </a>
                        </div>
                      <?php  
                    }
                    echo '</div>';
                  }
                ?>
                <?php // End Sponsores ?>

              </article><!-- #post-## -->
					</div><!-- .entry-content -->
				</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>