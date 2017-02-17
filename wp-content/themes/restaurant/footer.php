<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant
 */

?>


	<footer id="mastfoot" class="site-footer" role="contentinfo">
		<div class="row">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'restaurant' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'restaurant' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'restaurant' ), 'restaurant', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script>

    window.onload = function() {

	    jQuery('.slick-slider').slick({
	      dots: true,
		});

		jQuery(document).foundation();

		new WOW().init();
	}

    document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>');
</script>
</body>
</html>
