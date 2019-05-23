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

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		<aside class="colonne-gauche">
			<!-- image en arrière-plan dans le css -->
			<!-- div apparaît seulement en hover, voir dans le css -->
			<div id="presentation">
				<h3>Présentation de Sébastien Velly</h3><br>
				<?php the_field('texte_en_surimpression'); ?>
			</div>
		</aside>
		
		</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
