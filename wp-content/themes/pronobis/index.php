<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/brand/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/brand/favicon.ico" type="image/x-icon">		
		<link href="<?php echo get_bloginfo('template_directory'); ?>/node_modules/animate.css/animate.min.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/node_modules/flexboxgrid/dist/flexboxgrid.min.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/styles/css/style.css" rel="stylesheet">
	</head>
	<body>
		<header></header>
		
		<main>
			<div class="header-image row animated fadeIn">
				<div class="col-md-12">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/header/header_intro.jpg" alt="">
				</div>
			</div>
			
<!-- 			<div class="row">
				<ul class="navigation">
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Leistungen</a></li>
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Qualifikation</a></li>
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Kosten</a></li>
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Links</a></li>
				</ul>
			</div> -->

			<div class="row animated fadeIn">
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-1'); ?><br>
					<?php the_field('text_col-1'); ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-2'); ?><br>
					<?php the_field('text_col-2'); ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-3'); ?><br>
					<?php the_field('text_col-3'); ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-4'); ?><br>
					<?php the_field('text_col-4'); ?>
				</div>												
			</div>
		</main>

		<footer>
			<div class="row">
				<div class="col-xs-12 col-md-2 col-md-offset-1">
					<p>Rufen Sie mich an:</p>
					<p><a href="tel:0201409811">Telefon: 0201.409811</a></p>
				</div>
				<div class="col-xs-12 col-md-8">
					<p>pronobis Demenzbetreuung Dorothee Hammer ist ein von der Bezirksregierung Düsseldorf anerkanntes ambulantes Betreuungsangebot für Seniorinnen und Senioren mit und ohne eingeschränkter Alltagskompetenz.</p>
				</div>
			</div>
		</footer>

	</body>
</html>