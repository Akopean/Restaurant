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
