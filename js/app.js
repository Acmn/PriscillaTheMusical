jQuery(document).ready(function( $ ) {
  $(document).foundation();
  $(function() { FastClick.attach(document.body); });
  
  	/*************************************
        		Mobile Nav Toggle
    *************************************/
    
    /* Add closed attribute */
    
    $('#masthead').on('click','#menuToggle', function(e){
      e.preventDefault();

      if ($('ul#primary-menu').hasClass('open')){
        $('ul#primary-menu').toggleClass('open');
        $('#menuToggle').html('MENU <i class="fa fa-bars"></i>');
      } else {
        $('ul#primary-menu').toggleClass('open');
        $('#menuToggle').html('CLOSE <i class="fa fa-times"></i>');
      }
    });
    
    
    $('.fancybox').fancybox({
  		openEffect  : 'none',
  		closeEffect : 'none',
  		padding: 0,
  	});
    
  
    $('.fancybox-media').fancybox({
  		openEffect  : 'none',
  		closeEffect : 'none',
  		padding: 0,
  		helpers : {
  			media : {}
  		}
  	});
  
  
  $('.entry-content').fitVids();
  
});
