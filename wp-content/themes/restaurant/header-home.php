<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1" >
			<div class="homebanner">
				<ul class="scene" id="homebanner">
					<li class="layer splash1" data-depth="-0.06">
						<div>
							<div class="wow zoomInUp" data-wow-delay="0" data-wow-duration="8s"></div>
						</div>
					</li>
					<li class="layer splash2" data-depth="0.02">
						<div>
							<div class="wow zoomInUp" data-wow-delay="0" data-wow-duration="8s"></div>
						</div>
					</li>
					<li class="layer splash3" data-depth="0.06">
						<div>
							<div class="wow zoomInUp1" data-wow-delay="0.4" data-wow-duration="8s"></div>
						</div>
					</li>
					<li class="layer splash3a" data-depth="0.09">
						<div>
							<div class="wow zoomInUp1" data-wow-delay="0.6" data-wow-duration="8s"></div>
						</div>
					</li>
					<li class="layer splash4" data-depth="0.15">
						<div>
							<div class="wow zoomInUp1" data-wow-delay="0.8" data-wow-duration="8s"></div>
						</div>
					</li>
					<li class="layer splash5" data-depth="0.23">
						<div>
							<div class="wow zoomInUp2" data-wow-delay="0.9" data-wow-duration="8s"></div>
						</div>
					</li>
					<li class="layer splash5a" data-depth="0.35">
						<div>
							<div class="wow zoomInUp2" data-wow-delay="0.9" data-wow-duration="8s"></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="site-branding columns small-12">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'restaurant' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>#site-navigation -->
		</div>
</duv>

	</header><!-- #masthead -->
