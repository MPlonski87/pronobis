<?php /* Template Name: qualifikation */ ?>
<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
				<?php if (get_field('hero-image-lg')): ?>
					<img src="<?php the_field('hero-image-lg'); ?>" />
				<?php endif; ?>        
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
				<?php if (get_field('hero-image-xs')): ?>
					<img src="<?php the_field('hero-image-xs'); ?>" />
				<?php endif; ?>  
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
	<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>	
<?php get_footer(); ?>