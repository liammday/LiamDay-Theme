<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CSS_Grid_Single_Page
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php previous_posts_link('<button type="button" class="previous"><i class="fas fa-arrow-alt-circle-up"></i></button>', 0); ?>
			<div class="grid-container">
				<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
					<!--
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			-->
					<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content (different to Post-Type).
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
