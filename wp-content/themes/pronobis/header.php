<!DOCTYPE html>
<html lang="de">

	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117971068-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-117971068-1');
		</script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Dorothee Hammer">
		<meta name="publisher" content="Michael Plonski">
		<meta name="copyright" content="Michael Plonski und Norbert Hammer">
		<meta name="description" content="Pronobis Demenzbetreuung Dorothee Hammer ist ein von der Bezirksregierung Düsseldorf anerkanntes ambulantes Betreuungsangebot für Seniorinnen und Senioren mit und ohne eingeschränkter Alltagskompetenz.">
		<meta name="keywords" content="Pronobis, Demenzbetreuung, Dorothee, Hammer">
		<meta name="page-topic" content="Dienstleistung">
		<meta name="audience" content="Erwachsene">
		<meta name="robots" content="index, follow">	
		<meta property="og:title" content="Pronobis Demenzbetreuung Dorothee Hammer" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.pronobis.nrw/" />
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri() . '/screenshot.png'; ?>"/>			
		<title><?php echo get_bloginfo('name'); ?> | <?php $page_title = $wp_query->post->post_title; echo $page_title; ?></title>
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/favicon.ico'; ?>" type="image/x-icon" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() . '/favicon.ico';?>" type="image/x-icon" />	
		<?php wp_head(); ?>
	</head>

	<body>
		<header>
			<?php include (get_template_directory() . '/components/main-navigation.php'); ?>
