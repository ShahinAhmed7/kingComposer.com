<header class="side-header header-2">
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