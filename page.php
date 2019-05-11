<?php
/**
 * Template Name: Accueil
 * description: >- The template for displaying home page
 * @package sebastienvelly
 */

get_header();
?>

		<main id="main" class="site-main">

		<header class="logo-titre">
			<?php echo '<img src="' . get_template_directory_uri() . '/img/titre.png" alt="Logo titre de Sébastien Velly">'; ?>
		</header>
	
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
				Sébastien Velly est un auteur-compositeur-interprète brestois.
				Musicien depuis plus de 20 ans, Sébastien Velly écrit et compose ses titres à la sauce pop-rock.
				Après avoir joué en tant que guitariste et chanteur dans des groupes de reprises, il sort ses propres
				textes, en français, depuis 2013, accompagné de 3 musiciens, Georges Guimet (batterie), Aude
				Velly Menut (basse) et Sébastien Toullec (guitare).
			</div>
		</aside>
		
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
