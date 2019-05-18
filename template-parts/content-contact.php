<?php
/**
 * Template part for displaying page content in page-contact.php
 * @package sebastienvelly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content grid-2-small-1 has-gutter"> <!-- div pour le fond blanc -->
		<div>
			<?php sebastienvelly_post_thumbnail(); ?>
			<!-- div apparaît seulement en hover, voir dans le css -->
			<div id="presentation-album">
				<h3>Présentation du premier album de Sébastien Velly</h3>
				Après un premier <strong>EP 4 titres</strong> en 2014 « <strong>Plus proche de là-bas</strong> », le <strong>premier album</strong> est sorti en juin
				2018, intitulé « <strong>L'ordre des choses</strong> », 12 titres mélangeant expériences personnelles et observations, de style <strong>pop-rock</strong> <strong>en français</strong>,
				retraçant quatre années de <strong>musique</strong>.
				Le <strong>deuxième album</strong> est en cours de préparation, l'enregistrement est prévu l'hiver prochain.
				Les <strong>nouvelles chansons</strong> seront jouées cette année en <strong>live</strong>.
			</div>
		</div>

		<div id="divForm">
			<?php the_content(); ?>
			<form action="contact.php" method="post" name="contact">
				<label>Nom :</label><br>
				<input type="text" name="nom"><br>
				<label>Adresse mail :</label><br>
				<input type="email" name="email" required><br>
				<label>Message :</label><br>
				<textarea name="message" rows="4" required></textarea>
				<br>
				<input id="envoyer" type="submit" value="Envoyer">
			</form>
         </div>
                
         <?php
              if (isset($_POST['message'])) { 
				$message = wordwrap($_POST['message'], 70, "\r\n");
				$headers =
					'From: ' . $_POST['email'] . "\r\n" .
					'MIME-Version: 1.0' . "\r\n" .
					'Content-type: text/html; charset=utf-8';
            	   $retour = mail('zicos_29@hotmail.fr', 'Envoi depuis le site SebastienVelly.com', $message, $headers);
                  if($retour) {
                       echo '<script type="text/javascript">alert("Votre message a bien été envoyé")</script>';
                  } else {
					echo '<script type="text/javascript">alert("Une erreur est survenue")</script>';
				}
             }
         ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
