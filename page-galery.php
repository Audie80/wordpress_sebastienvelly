<?php
/**
 * Template Name: Galerie
 * description: >- The template for galery pages (photos and presse)
 * @package sebastienvelly
 */

get_header();
?>
		

		<?php
		while ( have_posts() ) :
			
			the_post();
			get_template_part( 'template-parts/content-galery', 'page' );

		endwhile; // End of the loop.

		
	  
		?>

		<aside class="colonne-gauche">
			<!-- image en arrière-plan dans le css -->
		</aside>
		
		</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
