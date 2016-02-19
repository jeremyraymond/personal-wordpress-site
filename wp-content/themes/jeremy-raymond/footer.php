<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package some_like_it_neat
 */
?>

		</main><!-- #main -->

		<footer id="contactme" class="site-footer wrap section" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

			<section class="site-info">
				<h4>GET IN TOUCH</h4>
				<div class="footer-left">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" />
					<span>jeremy.r.raymond@gmail.com</span>
				</div>
				<div class="footer-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" />
					<span>810&nbsp;&nbsp;624&nbsp;&nbsp;0622</span>
				</div>

			</section><!-- .site-info -->
			<a id="footer-link" class="nav-link" href="#page">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-i-do-up-white.png">
				<span>BACK TO TOP</span>
			</a>

		</footer><!-- #colophon -->

		<?php tha_footer_after(); ?>

	</div><!-- .wrap -->

</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

</body>
</html>
