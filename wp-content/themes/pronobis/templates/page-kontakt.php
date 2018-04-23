<?php /* Template Name: kontakt */ ?>
<?php get_header(); ?>
	    <div class="hero-image animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/impressum/hero-impressum.jpg'; ?>" alt="Vorschaubild Kontakt">
	    </div>
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>		    
	</header>

	<main class="main-content contact-form--main">
		<div class="row">
			<div class="col-xs-12 col-md-3">
				<div class="infobox">
					<ul>
						<li>KONTAKT</li>
					</ul>
				</div>								
			</div>		
			<div class="col-xs-12 col-md-3">
			</div>		
			<div class="col-xs-12 col-md-3">				
			</div>		
			<div class="col-xs-12 col-md-3">			
			</div>		
		</div>	
	</main>
	<?php include (get_template_directory() . '/components/contact-form.php'); ?>	
	<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>			
<?php get_footer(); ?>