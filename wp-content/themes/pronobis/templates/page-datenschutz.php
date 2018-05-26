<?php /* Template Name: datenschutz */ ?>
<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
				<?php if (get_field('hero-image-lg')): ?>
					<img src="<?php the_field('hero-image-lg'); ?>" alt="Vorschaubild Datenschutz"/>
				<?php endif; ?>        
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
				<?php if (get_field('hero-image-xs')): ?>
					<img src="<?php the_field('hero-image-xs'); ?>" alt="Vorschaubild Datenschutz"/>
				<?php endif; ?>  
	    </div>
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>		    
	</header>

	<main class="main-content">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="infobox">
					<ul>
						<li>DATENSCHUTZ</li>
					</ul>
				</div>								
			</div>
			<div class="col-xs-12">
				<?php the_field('col-1'); ?>
			</div>			
		</div>
	</main>
<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>		
<?php get_footer(); ?>