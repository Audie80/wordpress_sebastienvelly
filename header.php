<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @package sebastienvelly
 */

?>
<!doctype html>
<html class="no-js" lang="FR">
<html <?php language_attributes(); ?>>
<head>
	<!-- meta par défaut du thème -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- meta SV -->
	<title>Sébastien VELLY, chanteur auteur compositeur brestois</title>
	<META NAME="KEYWORDS" LANG="FR"
		CONTENT="Sébastien Velly, Sébastien Velly musicien, Sébastien Velly chanteur, Sébastien Velly auteur compositeur, Sébastien Velly Brest, chanteur brestois, auteur compositeur brestois, musicien brestois, musique pop rock français, musique pop rock, style pop rock français, pop rock français, concerts pop rock, concerts pop rock français, concert musique Brest, concert Brest, concert musique Finistère, concert musique Bretagne, Sébastien Velly guitariste, EP pop rock français, EP pop rock, album pop rock français, album pop rock, groupe musique pop rock, groupe musique pop rock français, groupe musique Brest, groupe musique brestois, groupe musique Finistère, groupe musique Bretagne" />
	<META NAME="DESCRIPTION" LANG="FR"
		CONTENT="Le site de Sébastien VELLY vous présente les dernières news, infos, photos, concerts à venir et extraits musicaux..." />
	<META NAME="ROBOTS" CONTENT="index,follow" />
	<META NAME="REVISIT-AFTER" CONTENT="10 days" />
	<META NAME="COPYRIGHT" CONTENT="Sébastien Velly" />
	<META NAME="EXPIRES" CONTENT="0" />
	<META NAME="AUTHOR" CONTENT="Sébastien Velly" />

	<link rel="manifest" href="site.webmanifest">

	<!-- les feuilles de style css sont ajoutées dans le wp_head() grâce au fichier functions.php -->
	<!-- les scripts js sont ajoutés dans le wp_foot() grâce au fichier functions.php -->

	<link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker" rel="stylesheet">
	<meta name="theme-color" content="#fafafa">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- skip to content pour les malvoyants
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sebastienvelly' ); ?></a> -->

	<!-- Script pour le module Facebook -->
  <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
  </div>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>

			<div class="facebook">
				<div class="fb-page" data-href="https://www.facebook.com/sebastienvellymusicien/" data-small-header="true"
				data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
				<blockquote cite="https://www.facebook.com/sebastienvellymusicien/" class="fb-xfbml-parse-ignore"><a
					href="https://www.facebook.com/sebastienvellymusicien/">Page Facebook de Sébastien Velly</a></blockquote>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- début du main -->
	<main id="main" class="site-main">

		<!-- logo titre -->
		<header class="logo-titre">
			<?php echo '<img src="' . get_template_directory_uri() . '/img/titre.png" alt="Logo titre de Sébastien Velly">'; ?>
		</header>

