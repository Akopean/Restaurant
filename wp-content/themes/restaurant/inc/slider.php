<?php
// Create HOME Slider
function home_slider_template() { ?>

	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#home-slider').slick({
				//For Users
				<?php // if (get_field('home_slider_navigation', 'option')) { echo 'directionNav:' . get_field('home_slider_navigation', 'option') . ',' ;} ?>		// Display "next" and "prev" buttons.
				<?php // if (get_field('home_slider_pagination', 'option')) { echo 'controlNav:' . get_field('home_slider_pagination', 'option') . ',' ;} ?>		// Show pagination
				<?php // if (get_field('home_slider_slide_speed', 'option')) { echo 'slideshowSpeed:' . get_field('home_slider_slide_speed', 'option') . ',' ;} ?>		// Change to any integrer for example autoPlay : 5000 to play every 5 seconds.
				// For Developers
				cssEase: 'ease',
				fade: false,  // Cause trouble if used slidesToShow: more than one
				arrows: false,
				dots: true,
				infinite: true,
				speed: 500,
				autoplay: false,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				slidesToScroll: 1
			});

		});
	</script>

   <?php $arg = array(
		'post_type'	        => 'slide',
		'order'		        => 'ASC',
		'orderby'	        => 'menu_order',
		'posts_per_page'    => -1
	);
	$slider = new WP_Query( $arg );
	if ( $slider->have_posts() ) : ?>

		<div id="home-slider" class="slick-slider">
			<?php while ( $slider->have_posts() ) : $slider->the_post();
				$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
			?>

			<div class="slick-slide" style="background-image: url('<?php echo $image; ?>')">
					<?php //the_post_thumbnail(); ?>
					<div class="slider-caption">
						<div class="row">
						<div class="column">
						<h3 class="slider-title"><?php the_title(); ?></h3>
						<?php the_content(); ?>

						<?php if(get_field('slide_link') ) :  ?>
							<a href="<?php the_field('slide_link'); ?>" class="button">
								<?php _e('Learn More'); ?>
							</a>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
		</div><!-- END of  #home-slider-->

	<?php endif; wp_reset_query(); ?>

<?php }

// HOME Slider Shortcode

function home_slider_shortcode() {
	ob_start();
	home_slider_template();
	$slider = ob_get_clean();
	return $slider;
}
add_shortcode( 'slider', 'home_slider_shortcode' );
