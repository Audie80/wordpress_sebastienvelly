<?php
/**
 * Template Name: Musique
 * description: >- The template for musique pages
 * @package sebastienvelly
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-musique', 'page' );

		endwhile; // End of the loop.
		?>

		<?php include 'aside.php';?>
		
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
