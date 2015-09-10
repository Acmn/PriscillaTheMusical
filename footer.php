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

	<div class="hide-for-large-up social-icons small-8 medium-5 small-centered large-3 columns"><?php get_template_part( 'partials/social', 'icons' ); ?></div>

	
</div><!-- #page -->

	<footer id="colophon" class="site-footer text-center" role="contentinfo">
		<div class="site-info">
			<p><a href="/contact-us">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/privacy-policy">Privacy Policy</a><!-- | <a href="/media">Media</a>--></p>
			<!--<p>All rights reserved &copy; <?php echo date('Y'); ?></p>-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<!--[if lt IE 9 ]>
	<script src="<?php bloginfo('template_url'); ?>/build/REM-unit-polyfill/js/rem.min.js" type="text/javascript"></script>
<![endif]-->
</body>
</html>
