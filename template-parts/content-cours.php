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

	<div class="entry-content grid-2-small-1 has-gutter animation-link"> <!-- div pour le fond blanc -->
		<div id="contenu-cours">
			<?php the_content(); ?>
        </div>

		<div>
			<?php sebastienvelly_post_thumbnail(); ?>
		</div>
                
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
