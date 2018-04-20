<?php get_header(); ?>
      <div class="hero-image animated fadeIn">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-image/impressum/hero-impressum.jpg'; ?>" alt="Vorschaubild Impressum">
      </div>
    <?php include (get_template_directory() . '/components/site-navigation.php'); ?>        
  </header>

	<main class="error">
  	<div class="row center-xs animated fadeIn">
      <div class="col-xs-12">
      	<p class="error__note">
					Leider konnte die von Ihnen aufgerufene Domain nicht gefunden werden.<br>
      		Klicken Sie bitte <a href="<?php echo site_url(); ?>">hier</a>, um auf die Startseite zurück zu gelangen.      		
      	</p>
      </div>                                            
    </div>
	</main>

<?php get_footer(); ?>
