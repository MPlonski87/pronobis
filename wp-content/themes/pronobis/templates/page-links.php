<?php /* Template Name: links */ ?>
<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/links/hero-links.jpg'; ?>" alt="Vorschaubild Links">
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/links/hero-links_mobile.jpg'; ?>" alt="Vorschaubild Links">
	    </div>	    
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>		    
	</header>

	<main class="main-content">
		<div class="row">
			<div class="col-xs-12 col-md-3">				
				<?php the_field('col-1'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">
				<?php the_field('col-2'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">				
				<?php the_field('col-3'); ?>
			</div>		
			<div class="col-xs-12 col-md-3">
				<div class="infobox">
					<ul>
						<li>LINKS</li>
						<li>LITERATUR</li>
					</ul>
				</div>				
				<?php the_field('col-4'); ?>
			</div>		
		</div>
	</main>
<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>		
<?php get_footer(); ?>