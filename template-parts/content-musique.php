<?php
/**
 * Template part for displaying page content in page-musique.php
 * @package sebastienvelly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content grid-2-small-1 has-gutter"> <!-- div pour le fond blanc -->
			<?php 
			
			the_content(); 
			
			?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
