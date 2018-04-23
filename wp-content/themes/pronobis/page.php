<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/startseite/hero-intro.jpg'; ?>" alt="Vorschaubild Startseite">
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
	        <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/startseite/hero-intro_mobile.jpg'; ?>" alt="Vorschaubild Startseite">
	    </div>	    
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>	    
	</header>

	<?php include (get_template_directory() . '/components/main-content.php'); ?>
	<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>	
<?php get_footer(); ?>