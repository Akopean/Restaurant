<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Restaurant
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div class="row">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; // End of the loop.
			?>

		<?php get_sidebar(); ?>

		</div>
	</main><!-- #main -->
<?php
get_footer();
