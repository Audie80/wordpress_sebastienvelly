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
	<!-- <title>Sébastien VELLY, chanteur auteur compositeur brestois</title> -->
	<META NAME="KEYWORDS" LANG="FR"
		CONTENT="Sébastien Velly, Sébastien Velly musicien, Sébastien Velly chanteur, Sébastien Velly auteur compositeur, Sébastien Velly Brest, chanteur brestois, auteur compositeur brestois, musicien brestois, musique pop rock français, musique pop rock, style pop rock français, pop rock français, concerts pop rock, concerts pop rock français, concert musique Brest, concert Brest, concert musique Finistère, concert musique Bretagne, Sébastien Velly guitariste, EP pop rock français, EP pop rock, album pop rock français, album pop rock, groupe musique pop rock, groupe musique pop rock français, groupe musique Brest, groupe musique brestois, groupe musique Finistère, groupe musique Bretagne" />
	<!-- <META NAME="DESCRIPTION" LANG="FR"
		CONTENT="Le site de Sébastien VELLY vous présente les dernières news, infos, photos, concerts à venir et extraits musicaux..." /> -->
	<META NAME="ROBOTS" CONTENT="index,follow" />
	<META NAME="REVISIT-AFTER" CONTENT="30 days" />
	<META NAME="COPYRIGHT" CONTENT="Sébastien Velly" />
	<META NAME="EXPIRES" CONTENT="0" />
	<META NAME="AUTHOR" CONTENT="Sébastien Velly" />

	<!-- les feuilles de style css sont ajoutées dans le wp_head() grâce au fichier functions.php -->
	<!-- les scripts js sont ajoutés dans le wp_foot() grâce au fichier functions.php -->
	<?php wp_head(); ?>

	<!-- SEO : les imports externes doivent se faire APRES les imports internes
			 + les imports JS doivent se faire APRES les imports CSS -->
	<link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker" rel="stylesheet">
	<meta name="theme-color" content="#fafafa">

	<!-- Google Tag Manager -->
	<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TCSSV5J');</script> -->
	<!-- End Google Tag Manager -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140667645-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-140667645-1');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2204489626324784'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1" 
		src="https://www.facebook.com/tr?id=2204489626324784&ev=PageView
		&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCSSV5J"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->

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
				<a href="https://www.facebook.com/sebastienvellymusicien/" target="_blank"><?php echo '<img src="' . get_template_directory_uri() . '/img/logo-facebook.png" alt="Logo Facebook de Sébastien Velly">'; ?></a>
				<a href="https://www.instagram.com/sebastien_velly/" target="_blank"><?php echo '<img src="' . get_template_directory_uri() . '/img/logo-instagram.png" alt="Logo Instagram de Sébastien Velly">'; ?></a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- début du main -->
	<main id="main" class="site-main">

		<!-- logo titre -->
		<header class="logo-titre">
			<?php echo '<img src="' . get_template_directory_uri() . '/img/titre.png" alt="Logo titre de Sébastien Velly">'; ?>
		</header>

