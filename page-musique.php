<?php
/**
 * Template Name: Musique
 * description: >- The template for musique pages
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

			get_template_part( 'template-parts/content-musique', 'page' );

		endwhile; // End of the loop.
		?>

		<aside class="colonne-gauche">
			<!-- image en arrière-plan dans le css -->
		</aside>
		
		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
