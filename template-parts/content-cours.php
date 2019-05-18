<?php
/**
 * Template part for displaying page content in page-cours.php
 * @package sebastienvelly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content grid-2-small-1 has-gutter"> <!-- div pour le fond blanc -->
		<div>
			<?php the_content(); ?>
        </div>

		<div>
			<?php sebastienvelly_post_thumbnail(); ?>
			<!-- div apparaît seulement en hover, voir dans le css -->
			<div id="presentation-cours">
				<h3>Présentation des cours dipensés par Sébastien Velly</h3>
				Texte.
			</div>
		</div>
                
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
