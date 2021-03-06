<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		

	<header class="entry-header">
		<?php css_grid_single_page_post_thumbnail(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta">
			<time class="time text-left" datetime="<?php the_time('d-m-Y')?>"><span class="author">Posted by Liam</span><br><span><?php the_time('jS F Y') ?></span></time>

			</div><!-- .entry-meta -->
		<?php css_grid_single_page_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
