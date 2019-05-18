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
				<h3>Présentation de Sébastien Velly</h3>
				<strong>Sébastien Velly</strong> est un <strong>auteur-compositeur-interprète</strong> brestois.
				<strong>Musicien</strong> depuis plus de 20 ans, Sébastien Velly écrit et compose ses titres à la sauce <strong>pop-rock</strong>.
				Après avoir joué en tant que <strong>guitariste</strong> et chanteur dans des groupes de reprises sur la région de <strong>Brest</strong>, il sort <strong>ses propres
				textes</strong>, <strong>en français</strong>, depuis 2013, accompagné de 3 musiciens, Georges Guimet (batterie), Aude
				Velly Menut (basse) et Sébastien Toullec (guitare).
			</div>
		</aside>
		
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
