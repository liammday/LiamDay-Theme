<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>">

			<div class="article-container">

				<?php css_grid_single_page_post_thumbnail(); ?>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
				<!-- .entry-header -->


				<div class="entry-content">
					<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'liamday-theme' ),
			'after'  => '</div>',
		) );
		?>
				</div>
				<!-- .entry-content -->

				<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'liamday-theme' ),
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
				</footer>
				<!-- .entry-footer -->
				<?php endif; ?>
			</div>
		</a>
	</article>
	<!-- #post-<?php the_ID(); ?> -->
