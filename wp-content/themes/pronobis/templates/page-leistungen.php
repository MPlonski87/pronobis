<?php /* Template Name: leistungen */ ?>
<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/leistungen/hero-leistungen.jpg'; ?>" alt="Vorschaubild Leistungen">
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/leistungen/hero-leistungen_mobile.jpg'; ?>" alt="Vorschaubild Leistungen">
	    </div>	    
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>		    
	</header>

	<main class="main-content">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="infobox">
					<ul>
						<li>BETREUUNGSANGEBOTE</li>
						<li>BETREUUNGSZIELE</li>
						<li>ABGEHÖRIGENBERATUNG</li>
					</ul>
				</div>				
				<?php the_field('col-1'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">
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