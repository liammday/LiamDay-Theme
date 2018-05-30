<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

		<div class="article-container">
			<?php the_post_thumbnail(); ?>
			<img class="social-profile-img" src="https://scontent-lht6-1.cdninstagram.com/vp/d9a8340b8fa5c530306332324ac22452/5B9F641E/t51.2885-19/s320x320/20838583_1414763215245296_2545838613413756928_a.jpg">



			<footer class="entry-footer">
				<div class="entry-meta">
					<?php the_content(); ?>
					<time class="time text-left" datetime="<?php the_time('d-m-Y')?>"><span class="instagram-author">Instagrammed by <a href="http://instagram.com/liammday">@liammday</a></span><br><span><?php the_time('jS F Y') ?></span></time>
				</div>

			</footer>
			<!-- .entry-footer -->
		</div>

	</article>
	<!-- #post-<?php the_ID(); ?> -->
