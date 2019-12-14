<?php
/**
 * The aside for our theme
 * This is the template that displays the <aside> section.
 * @package sebastienvelly
 */
?>

<aside class="colonne-gauche">
	<!-- image en arrière-plan dans le css -->
	<div id="background-image-1"></div>
	<div id="background-image-2"></div>
	<div id="background-image-3"></div>
	<div id="background-image-4"></div>

	<?php if ( is_page_template( 'page.php' ) ) {?>
		<!-- div apparaît seulement en hover, voir dans le css (seulement sur la page d'accueil) -->
		<div id="presentation">
			<h2>Présentation de Sébastien Velly</h2>
			<p><?php the_field('texte_en_surimpression'); ?></p>
		</div>
	<?php };?>
</aside>