<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage CFC
 * @since Boilerplate 1.0
 */
?>



		<footer role="contentinfo">

			<p>&copy; <?php echo date("Y"); ?> <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

		</footer><!-- footer -->




		<!-- Symbolset JS support -->
		<script src="<?php bloginfo( 'template_directory' ); ?>/webfonts/ss-standard.js"></script>




<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	

	</body>

</html>