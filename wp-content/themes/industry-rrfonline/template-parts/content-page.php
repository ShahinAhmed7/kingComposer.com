<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Industry_RRFOnline
 */

// page title start
if(get_post_meta( $post->ID, 'theme_page_meta_option', true )){
	$page_meta = get_post_meta( $post->ID, 'theme_page_meta_option', true );
} else{
	$page_meta = array();
}

if(array_key_exists('enable_title', $page_meta)) {
	$enable_title = $page_meta['enable_title'];
} else{
	$enable_title = true;
}

// page title end

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if($enable_title == true) : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php industry_rrfonline_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'industry-rrfonline' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'industry-rrfonline' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
