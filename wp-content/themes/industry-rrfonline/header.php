<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industry_RRFOnline
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="side-header">
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							endif;
							 ?>
						</div><!-- .site-branding -->
					</div>

					<div class="col-md-8">
						<div class="header-right-btn">
							<a href="#">Featured in New York Times, Forbes & Mashable</a>
							<a href="#">25 years of industrial experiences</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</div>
					<div class="col-md-4">
						<div class="header-search-form">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
