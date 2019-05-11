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
		<div>
			<img src="img/lordredeschoses.jpg" alt="Sébastien Velly L'ordre des choses" id="ordre_des_choses">
			<!-- div apparaît seulement en hover, voir dans le css -->
			<div id="presentation-album">
				Après un premier EP 4 titres en 2014 « Plus proche de là-bas », le premier album est sorti en juin
				2018, intitulé « L'ordre des choses », 12 titres mélangeant expériences personnelles et observations,
				retraçant quatre années de musique.
				Le deuxième album est en cours de préparation, enregistrement prévu l'hiver prochain.
				Les nouvelles chansons seront jouées cette année en live.
			</div>
		</div>

		<div>
			Pour commander l'album de Sébastien Velly,
			<br>
			(au prix de 10€ + 1,50€ de frais de port)
			<br>
			Si vous souhaitez organiser un concert,
			<br>
			Ou pour toute autre demande,
			<br>
			<br>
			Veuillez remplir le formulaire ci-dessous :
			<br>
			<form action="contact.php" method="post" name="contact">
				<label>Nom :</label><br>
				<input type="text" name="nom"><br>
				<label>Adresse mail :</label><br>
				<input type="email" name="email" required><br>
				<label>Message :</label><br>
				<textarea name="message" rows="4" cols="50" required></textarea>
				<br>
				<input type="submit" value="envoyer">
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
