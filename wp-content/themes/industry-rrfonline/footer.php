<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industry_RRFOnline
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if(is_active_sidebar( 'footer' )) : ?>
		<div class="footer-top-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php 
							dynamic_sidebar('footer');
						 ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>



		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'industry-rrfonline' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'industry-rrfonline' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'industry-rrfonline' ), 'industry-rrfonline', '<a href="http://shahin.me">Shahin Ahmed</a>' );
							?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
