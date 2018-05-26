<?php get_header(); ?>
	    <div class="hero-image hero-image--sm animated fadeIn">
				<?php if (get_field('hero-image-lg')): ?>
					<img src="<?php the_field('hero-image-lg'); ?>" alt="Vorschaubild Startseite"/>
				<?php endif; ?>        
	    </div>
	    <div class="hero-image hero-image--xs animated fadeIn">
				<?php if (get_field('hero-image-xs')): ?>
					<img src="<?php the_field('hero-image-xs'); ?>" alt="Vorschaubild Startseite"/>
				<?php endif; ?>  
	    </div>	    
		<?php include (get_template_directory() . '/components/site-navigation.php'); ?>	    
	</header>

	<?php include (get_template_directory() . '/components/main-content.php'); ?>
	<?php include (get_template_directory() . '/components/scroll-to-top.php'); ?>	
<?php get_footer(); ?>