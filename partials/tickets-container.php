        
<div class="ticket-details" id="ticketsPage">
        
  <?php 
    if(get_field('waitlist')){ ?>
      <div class="waitlist">
        <h2>WAITLIST NOW</h2>
        <?php the_field('above_form'); ?>
         
        <div class="waitlist-form">
          <p>ADD WAITLIST FORM</p>
        </div>
         
        <?php the_field('below_form'); ?>
      </div>
  <?php    
    
    // end if waitlist
    
    } else {
   ?>
	
	
	<?php // MAIN TICKET DETAILS ?>
  <section class="main-tickets tickets-section">			    
    <h2 class="theatre"><?php the_field('theatre'); ?></h2>
	  <h2 class="dates"><?php the_field('date'); ?></h2>
          
    <?php 
      $ticketLinks = get_field('tickets_link');
      if ($ticketLinks) {
        foreach ($ticketLinks as $ticketLink) { ?>
        <a href="<?php echo $ticketLink['url']; ?>" class="button ticket-button" target="_blank" onclick="ga('send', 'event', 'purchase', 'tickets', '<?php echo $tickets; ?>');"><?php echo $ticketLink['button_text']; ?></a>
        <?php
        } // end foreach
      } // end ticketLinks
     ?>
            
      <p>
        Phone <?php the_field('phone'); ?> or 
        <a href="<?php the_field('outlet_link'); ?>" target="_blank" onclick="ga('send', 'event', 'purchase', 'in person', '<?php echo $tickets; ?>');">Locate an outlet</a>
      </p>
  </section>  
  <?php // END MAIN TICKET DETAILS ?>
  
 
 
  
  <?php // Groups DETAILS ?>
  <section class="groups-tickets tickets-section">
    <h3><?php the_field('groups_heading'); ?></h3>
    <p><?php the_field('groups_info'); ?></p>
    <?php 
      $groupsLinks = get_field('groups_link');
      if ($groupsLinks) {
        foreach ($groupsLinks as $groupsLink) { ?>
        <a href="/group-bookings/" class="button" onclick="ga('send', 'event', 'purchase', 'groups', '<?php echo $tickets; ?>');"><?php echo $groupsLink['groups_button']; ?></a>
        <?php
        } // end foreach
      } // end ticketLinks
     ?>   
  </section>  
  <?php // END Groups DETAILS ?>





  <?php // INFORMATION DETAILS ?>
  <section class="information">
    <h3><?php the_field('information_heading'); ?></h3>
    
    <p class="location">
      <?php the_field('info_theatre'); ?></p>
    <p>
      <?php the_field('location'); ?>
    
      <a href="<?php the_field('map_link'); ?>" target="_blank">VIEW MAP</a>
    </p> 
    
    <div class="times">
      <h4><?php the_field('show_times_heading'); ?></h4>
      <p class="location"><?php the_field('times'); ?></p>       
    </div>  
                     
  </section>  
  <?php // END INFORMATION DETAILS ?>


              
  <!-- END OF TICKETS DETAILS -->
 
 <?php
  } // end if waitlist
  //end entry-content ?>
    <?php // Sponsores ?>
    
    <?php 
      $sponsors = get_field('sponsors');
      if($sponsors) {
        echo '<section class="sponsors tickets-section">';
        foreach ($sponsors as $sponsor) { ?>
          <div class="sponsor">
            <a href="<?php echo $sponsor['link']; ?>" onclick="ga('send', 'event', 'sponsor', '<?php echo $sponsor['title']; ?>', '<?php the_title(); ?>');" target="_blank">
              <img src="<?php echo $sponsor['image']; ?>" alt="<?php echo $sponsor['title']; ?>">
              <p><?php echo $sponsor['included_text']; ?></p>
            </a>
          </div>
        <?php  
        }
        echo '</section>';
      }
    ?>
  
  <?php // End Sponsores ?>
</div>