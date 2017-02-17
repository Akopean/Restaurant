<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Restaurant
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">
		<div class="row">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header columns small-12">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'restaurant' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
				<section class="no-results not-found columns small-12  medium-8">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();
				echo '</section>';
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		<?php
		get_sidebar();
		?>
		</div>
	</main><!-- #main -->
<?php
get_footer();
