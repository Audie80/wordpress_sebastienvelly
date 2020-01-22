<?php
/**
 * Template Name: Cours
 * description: >- The template for cours pages
 * @package sebastienvelly
 */

get_header();
?>
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-cours', 'page' );

		endwhile; // End of the loop.
		?>

		<?php include 'aside.php';?>
		
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
