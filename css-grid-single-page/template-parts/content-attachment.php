<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

?>

	<!-- content-attachement.php -->

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



		<div class="single-img-grid-container">
			<span>
			<?php previous_post_link('%link', '<i class="fas fa-times"></i>'); ?>
			<?php get_previous_post_link('', ''); ?>
			<?php echo wp_get_attachment_image( get_the_ID(), 'full' ); ?>
			<footer class="entry-footer">
			<div class="entry-meta">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<time class="time text-left" datetime="<?php the_time('d-m-Y')?>"><span class="author">Posted by Liam</span><br><span><?php the_time('jS F Y') ?></span></time>

		</div>
		<!-- .entry-meta -->
		</footer>
		</span>
		</div>


		<!-- .entry-footer -->
	</article>
	<!-- #post-<?php the_ID(); ?> -->
