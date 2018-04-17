<?php /* Template Name: qualifikation */ ?>
<?php get_header(); ?>
	    <div class="hero-image animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/qualifikation/hero-qualifikation.jpg'; ?>" alt="Vorschaubild Qualifikation">
	    </div>
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>
	</header>

	<main class="main-content">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<?php the_field('col-1'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">
				<div class="infobox">
					<ul>
						<li>Meine Motivation</li>
						<li>Qualifikation</li>
						<li>Qualitätssicherung</li>
					</ul>
				</div>
				<?php the_field('col-2'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">
				<?php the_field('col-3'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">
				<?php the_field('col-4'); ?>
			</div>		
		</div>
	</main>
<?php get_footer(); ?>