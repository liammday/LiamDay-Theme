<?php
/**
 * Template part for displaying aside posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- content-aside template -->

		<?php css_grid_single_page_post_thumbnail(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<!-- .entry-content -->

		<footer class="entry-footer">
			<div class="entry-meta">
				<time class="time text-left" datetime="<?php the_time('d-m-Y')?>"><span class="twitter-author">Tweeted by <a href="http://twitter.com/liammday">@liammday</a></span><br><span><?php the_time('jS F Y') ?></span></time>
			</div>
			<!-- .entry-meta -->
			<?php css_grid_single_page_entry_footer(); ?>
		</footer>
		<!-- .entry-footer -->
	</article>
	<!-- #post-<?php the_ID(); ?> -->
