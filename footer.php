<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package starter 2
 */
?>

	</div><!-- #content -->
	</div><!-- .site -->
	
</div><!-- #page -->


  <?php 
    $quotes = get_field('quotes','options');
    if ($quotes) { ?>
      <div id="quotes" class="quotes"> 
        <?php if ( count($quotes) > 1) { ?>
        Many Quotes
        <?php } else { ?>
          <blockquote>
            <?php echo $quotes[0]['quote']; ?>
            <cite><?php echo $quotes[0]['citation']; ?></cite>
          </blockquote>
        <?php } ?>
      </div>
   <?php
    }  
  ?>


	<footer id="colophon" class="site-footer text-center" role="contentinfo">
		<div class="site-info">
			<p><a href="/contact-us">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/media">Media</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/privacy-policy">Privacy Policy</a><!-- | <a href="/media">Media</a>--></p>
			<!--<p>All rights reserved &copy; <?php echo date('Y'); ?></p>-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<!--[if lt IE 9 ]>
	<script src="<?php bloginfo('template_url'); ?>/build/REM-unit-polyfill/js/rem.min.js" type="text/javascript"></script>
<![endif]-->
</body>
</html>
