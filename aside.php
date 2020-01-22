<?php
/**
 * The aside for our theme
 * This is the template that displays the <aside> section.
 * @package sebastienvelly
 */
?>

<aside class="colonne-gauche">

	<!-- animation d'images en arrière-plan dans le css -->

	<?php
		$args = array(
			'post_type' => 'image',
			'name' => 'image-1'
		);
		$the_query = new WP_Query($args);
	?>
	<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="background-image-1" style="--bg-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
	<?php endwhile; ?>

	<?php
		$args = array(
			'post_type' => 'image',
			'name' => 'image-2'
		);
		$the_query = new WP_Query($args);
	?>
	<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="background-image-2" style="--bg-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
	<?php endwhile; ?>

	<?php
		$args = array(
			'post_type' => 'image',
			'name' => 'image-3'
		);
		$the_query = new WP_Query($args);
	?>
	<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="background-image-3" style="--bg-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
	<?php endwhile; ?>
		
	<?php
		$args = array(
			'post_type' => 'image',
			'name' => 'image-4'
		);
		$the_query = new WP_Query($args);
	?>
	<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
		<div id="background-image-4" style="--bg-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
	<?php endwhile; ?>

	<?php
		/* Restore original Post Data */
		wp_reset_postdata();
	?>

	<?php if ( is_page_template( 'page.php' ) ) {?>
		<!-- div apparaît seulement en hover, voir dans le css (seulement sur la page d'accueil) -->
		<div id="presentation">
			<h2>Présentation de Sébastien Velly</h2>
			<p><?php the_field('texte_en_surimpression'); ?></p>
		</div>
	<?php };?>
</aside>