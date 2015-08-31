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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p><a href="/contact-us">Contact Us</a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/media">Media</a></p>
			<p>All rights reserved &copy; <?php echo date('Y'); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!--[if lt IE 9 ]>
	<script src="<?php bloginfo('template_url'); ?>/build/REM-unit-polyfill/js/rem.min.js" type="text/javascript"></script>
<![endif]-->
</body>
</html>
