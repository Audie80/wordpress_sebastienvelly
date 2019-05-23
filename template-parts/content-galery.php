<?php
/**
 * Template part for displaying page content in page-galery.php
 * @package sebastienvelly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content"> <!-- div pour le fond blanc -->
		<div class="galery">

          <?php
            
              the_content();
              wp_link_pages();

        ?>

    </div>
	  
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
