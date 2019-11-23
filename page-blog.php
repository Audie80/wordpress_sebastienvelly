<?php
/**
 * Template Name: Blog
 * description: >- The template for blog pages
 * @package sebastienvelly
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		
		<aside class="colonne-gauche">
			<!-- image en arrière-plan dans le css -->
		</aside>

		</main><!-- #main -->

<?php
//get_sidebar();
get_footer();