<?php /* Template Name: leistungen */ ?>
<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
				<?php if (get_field('hero-image-lg')): ?>
					<img src="<?php the_field('hero-image-lg'); ?>" alt="Vorschaubild Leistungen"/>
				<?php endif; ?>        
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
				<?php if (get_field('hero-image-xs')): ?>
					<img src="<?php the_field('hero-image-xs'); ?>" alt="Vorschaubild Leistungen"/>
				<?php endif; ?>  
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
<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>		
<?php get_footer(); ?>