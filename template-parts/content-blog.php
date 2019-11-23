<?php
/**
 * Template part for home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sebastienvelly
 */

?>

	<div><!-- div qui permet d'utiliser :last-child sur les articles -->

	<?php 
		$args = array( 'numberposts' => '10' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach($recent_posts as $post) : ?>
			<article class="blog-article">
				<header class="entry-header">
					<h1 class="entry-title"><?php echo $post['post_title'] ?></h1>
					<?php //if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php
							echo 'Posté le ' . get_the_date( 'j F Y', $post['ID'])
							?>
						</div><!-- .entry-meta -->
					<?php //endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content animation-link">
					<?php
						echo $post['post_content'];
						//echo '<a href="' . get_permalink(423) . '"><span class="previous_posts_link">Voir les articles plus anciens</span></a>';
					?>
			</div><!-- .entry-content -->
		</article><!-- #post -->
		<?php endforeach; wp_reset_query(); ?>

	</div>

		
		

