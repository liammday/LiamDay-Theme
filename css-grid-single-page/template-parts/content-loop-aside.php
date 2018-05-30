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
		<div class="article-container">

			<!-- content-aside template -->

			<?php the_post_thumbnail(); ?>
			<img class="social-profile-img" src="https://pbs.twimg.com/profile_images/944860124182654976/30IUZUSa_400x400.jpg">

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<!-- .entry-content -->

			<footer class="entry-footer">
				<div class="entry-meta">
					<time class="time text-left" datetime="<?php the_time('d-m-Y')?>"><span class="twitter-author">Tweeted by <a href="http://twitter.com/liammday">@liammday</a></span><br><span><?php the_time('jS F Y') ?></span></time>
				</div>
				<!-- .entry-meta -->
			</footer>
			<!-- .entry-footer -->
		</div>
	</article>
	<!-- #post-<?php the_ID(); ?> -->
