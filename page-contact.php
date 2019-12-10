<?php
/**
 * Template Name: Contact
 * description: >- The template for contact pages
 * @package sebastienvelly
 */

get_header();
?>
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-contact', 'page' );

		endwhile; // End of the loop.
		?>

		<aside class="colonne-gauche">
			<!-- image en arrière-plan dans le css -->
			<div id="background-image"></div>
		</aside>
		
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
