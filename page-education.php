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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      	
      	<div class="entry-content education-list">
        	<div class="row">
        	  <div class="small-12 columns">
	        		<?php // INTRO ?>
    				
    				<section class="education-section">
      				<h2><?php the_field('introduction_heading'); ?></h2>
      				<div class="education-inner">
        				<?php the_field('introduction_text'); ?>
              </div>
    				</section>
    				
    				
    				<?php // BOOKINGS ?>

    				<section class="education-section">
      				<h2><?php the_field('bookings_heading'); ?></h2>
      				<div class="education-inner">
        				<?php // the_field('booking_text'); ?>
        				<div class="row">
          				<div class="small-12 medium-4 columns">
          				  <div class="panel">
            				  <h3>Sydney</h3>
            				  <a href="/groups" class="button">Book Now</a>
          				  </div>
          				</div>
          				<div class="small-12 medium-8 columns small-text-center medium-text-left">
            				<?php the_field('sydney_booking_text'); ?>
          				</div>
        				</div>
        				<br>
        				<div class="row">
          				<div class="small-12 medium-4 columns">
          				  <div class="panel">
            				  <h3>Brisbane</h3>
            				  <a href="/groups" class="button">Book Now</a>
          				  </div>
          				</div>
          				
          				<div class="small-12 medium-8 columns small-text-center medium-text-left">
            				<?php the_field('brisbane_booking_text'); ?>
          				</div>
        				</div>
        				<div class="row">
        				  <div class="small-12 columns fine-print">
          				  <?php the_field('bookings_fine_print'); ?>
        				  </div>
        				</div>
      				</div>
    				</section>

    				
    				<?php // POST SHOW PRESENTATIONS ?>
<!--
    				<section class="education-section">
      				<h2><?php the_field('post_show_heading'); ?></h2>
      				<div class="education-inner">
        				<?php the_field('post_show_text'); ?>
        				<div class="row">
          				<div class="small-12 medium-4 columns">
          				  <div class="panel">
            				  <h3>Melbourne<br>(Term 2)</h3>
            				  <?php the_field('melbourne_post_show_text'); ?>
          				  </div>
          				</div>
          				<div class="small-12 medium-4 columns">
          				  <div class="panel">
            				  <h3>Brisbane<br>(Term 3)</h3>
            				  <?php the_field('brisbane_post_show_text'); ?>
          				  </div>
          				</div>
          				<div class="small-12 medium-4 columns">
          				  <div class="panel">
            				  <h3>Sydney<br>(Term 4)</h3>
            				  <?php the_field('sydney_post_show_text'); ?>
          				  </div>
          				</div>
        				</div>
              </div>
    				</section>
-->
    				
    				
    				
    				<?php // EDUCATIONAL DOWNLOADS
      				
      				$download_sections = get_field('download_sections');
      				
      				if( $download_sections ){
        				
        				echo '<h1 class="page-title text-center">Teachers Resources</h1>'; ?>
        				 <section class="education-section">
            				<h2>Introduction</h2>
            				  <div class="education-inner">
              				  <?php the_field('download_sections_intro'); ?>
            				  </div>
        				 </section>
        				
        				<?php
        				foreach ($download_sections as $download_section) { ?>
          			  <section class="education-section">
            				<h2><?php echo $download_section['heading']; ?></h2>
            				  <div class="education-inner">
                				<?php 
                  				$downloads = $download_section['downloads']; 
                  				if($downloads) { ?>
                  				  <div class="download-section">
                      				<table>
                        				<thead>
                          				<tr>
                          				  <th colspan="2">DOWNLOADS</th>                          				
                          				</tr>
                        				</thead>
                        				<tbody>
                      				<?php foreach ($downloads as $download) { ?>
                      				  <tr>
                        				  <td class="description">
                          				 <?php echo $download['description']; ?>
                        				  </td>
                        				  <td class="download">
                          				  <?php 
                            				  $file = $download['file'];
                            				  
                            				  if ($file) { ?>
                              				  <a class="download" data-title="<?php echo esc_attr( $download['description'] ); ?>" href="<?php echo $file['url']; ?>" download>DOWNLOAD</a>
                            				  <?php } else {
                              				  echo 'DOWNLOAD TBC';
                            				  }
                            				  
                            				?>
                        				  </td>
                      				  </tr>
                      				<?php } ?>
                        				</tbody>
                      				</table>
                    				</div>
                  			<?php	} ?>
            				  </div>
          				</section>
          			<?	
        				} // end foreach $download_sections
      				} // end if $download_sections
            ?>
        	  </div>
        	</div>

      	</div><!-- .entry-content -->
      
      	<footer class="entry-footer">
        	<div class="row">
        	  <div class="small-12 medium-8 columns">
          	  <?php edit_post_link( __( 'Edit', 'starter' ), '<span class="edit-link">', '</span>' ); ?>
        	  </div>
        	</div>
      	</footer><!-- .entry-footer -->
      	
      </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
