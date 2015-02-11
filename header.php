<!DOCTYPE html>
<html lang="es-VE">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<meta itemprop="name" content="Fundacion Distribuidora Nacional de Cine Amazonia Films 2014" />
	<meta itemprop="copyright" content="Amazonia Films | <?php print date('Y') ?>" />
	<meta itemprop="contentRating" content="General" />
	<meta name="identifier-url" content="http://www.amazoniafilms.gob.ve/" />
	<meta name="title" content="Fundacion Distribuidora Nacional de Cine Amazonia Films" />
	<meta name="author" content="Jose Luis Vieitez" />
	<meta name="robots" content="All" />
	<meta name="revisit-after" content="1" />
	<meta name="description" content="Distribucion de producciones cinematograficas" />
	<meta name="keywords" content="distribucion, peliculas, catalogo, producciones, cine" />
	<meta name="copyright" content="Amazonia Films | <?php print date('Y') ?>" />

	<?php wp_head() ?>

</head>

<body <?php body_class() ?>>
	<div id="wrap">
		<div id="content">
			<div class="inner">
				<header>
					<div class="inner">
						<div class="wrapper">
							<div class="social">
								<a target="_blank" href="https://www.facebook.com/amazoniafilms.distribuidora"><img src="<?php echo get_template_directory_uri() ?>/static/images/facebook.png" alt="facebook"></a>
								<a target="_blank" href="https://twitter.com/amazoniafilms"><img src="<?php echo get_template_directory_uri() ?>/static/images/twitter.png" alt="twitter"></a>
								<a target="_blank" href="https://www.youtube.com/channel/UCxaf6TY5S5hVmHWwCZy3waQ"><img src="<?php echo get_template_directory_uri() ?>/static/images/youtube.png" alt="youtube"></a>
							</div>
							<nav><?php wp_nav_menu(array('theme_location' => 'primary')) ?></nav>
						</div>
						<div class="logo">
							<img src="<?php echo get_template_directory_uri() ?>/static/images/logo-af.png" alt="Amazonia Films">
						</div>
					</div>
				</header>
				<section>
					
