<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="article-container">

			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
			css_grid_single_page_posted_on();
			css_grid_single_page_posted_by();
			?>
				</div>
				<!-- .entry-meta -->
				<?php endif; ?>
			</header>
			<!-- .entry-header -->

			<?php css_grid_single_page_post_thumbnail(); ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div>
			<!-- .entry-summary -->

			<footer class="entry-footer">
				<?php css_grid_single_page_entry_footer(); ?>
			</footer>
			<!-- .entry-footer -->
		</div>
	</article>
	<!-- #post-<?php the_ID(); ?> -->
