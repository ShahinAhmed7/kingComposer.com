<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Industry_RRFOnline
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('brownvent-single-article'); ?>>
	<header class="entry-header">
        <?php if(has_post_thumbnail() && get_post_type() != 'project') : ?>
        <div class="brownvent-post-featured-content">
           
            <?php if(!is_singular()){ echo '<a href="'.get_the_permalink().'">';} ?>
                <?php the_post_thumbnail('theme-image-size'); ?>
            <?php if(!is_singular()){ echo '</a>';} ?>
        </div>
        <?php endif; ?>


	<?php if(!is_single()) : ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
					industry_rrfonline_posted_on();
					industry_rrfonline_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php endif; ?>


	<div class="entry-content">
	<?php 
		if(is_single()) {
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'industry-rrfonline' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		} else{
			the_excerpt();
			echo '<p class="readmore-wrap"><a href="' . esc_url( get_permalink() ) . '" class="boxed-btn">Read more</a></p>';
		}
	 ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'industry-rrfonline' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<div class="clearfix"></div>
	<footer class="entry-footer">
		<?php industry_rrfonline_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
