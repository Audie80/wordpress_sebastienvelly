<?php
/**
 * Template part for home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sebastienvelly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
		$args = array( 'numberposts' => '1' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach($recent_posts as $post) : ?>
				<header class="entry-header">
					<h1 class="entry-title">Actualités</h1>
					<?php //if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php
							echo 'Posté le ' . get_the_date( 'j F Y', $post['ID'])
							?>
						</div><!-- .entry-meta -->
					<?php //endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content animation-link">
					<h2><?php echo $post['post_title'] ?></h2>
					<?php
						echo $post['post_content'];
						echo '<a href="' . get_permalink(443) . '"><span class="previous_posts_link">Voir les articles plus anciens</span></a>';
					?>
			</div><!-- .entry-content -->
		<?php endforeach; wp_reset_query(); ?>

		</article><!-- #post -->
		

