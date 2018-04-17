<?php /* Template Name: impressum */ ?>
<?php get_header(); ?>
	    <div class="hero-image animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/impressum/hero-impressum.jpg'; ?>" alt="Vorschaubild Impressum">
	    </div>
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>		    
	</header>

	<main class="main-content">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="infobox">
					<ul>
						<li>IMPRESSUM</li>
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