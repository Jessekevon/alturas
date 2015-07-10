<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="wrap">
						<p>© 2015 Alturas Foundation. All rights reserved. Website by what.it.is</p>
					</div>
				</footer><!-- #colophon -->
				
</main><!-- main content -->
</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/site-navigation.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
</body>
</html>