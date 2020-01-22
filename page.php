<?php
/**
 * Template Name: Accueil
 * description: >- The template for displaying home page
 * @package sebastienvelly
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-home', 'page' );

		endwhile; // End of the loop.
		?>

		<?php include 'aside.php';?>
		
		</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
