<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
			<!-- .page-header -->
			<?php previous_posts_link('<button type="button" class="previous"><i class="fas fa-arrow-alt-circle-up"></i></button>', 0); ?>
			<div class="grid-container">
				<?php if ( have_posts() ) : ?>



				<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-loop', get_post_format() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
			<?php next_posts_link('<button type="button" class="next"><i class="fas fa-arrow-alt-circle-down"></i></button>', 0); ?>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php
get_footer();
