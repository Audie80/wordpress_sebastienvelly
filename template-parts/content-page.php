<?php
/**
 * Template part for displaying page content in page.php
 * @package sebastienvelly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php 
		the_title( '<h2', '</h2>' );
		
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sebastienvelly' ),
			'after'  => '</div>',
		) );
		
		sebastienvelly_post_thumbnail(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
