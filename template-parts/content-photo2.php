<?php
/**
 * Template part for displaying page content in page-photo2.php
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
            $attachments = '';
            $attachments = get_posts( array(
            'post_type'   => 'attachment',
            'numberposts' => -1,
            'post_status' => null,
            'post_parent' => $post->ID
            ) );
         
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
                
              $attachment_image = wp_get_attachment_image_src( $attachment->ID, array(1000, 1000) );

          ?>
                <a href="<?php echo $attachment_image[0]; ?>" data-lightbox="photos" data-title="<?php echo get_the_title($attachment); ?>"><?php echo wp_get_attachment_image( $attachment->ID, 'full' ); ?></a>
                <?php
            }
        }?>

    </div>
    
        <a class="prec-suiv" href="<?php echo get_permalink(82); ?>">Page précédente</a>

	  
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
