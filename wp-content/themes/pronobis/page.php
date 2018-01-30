<?php get_template_part('partials/header'); ?>
		
		<main>
			<div class="header-image row animated fadeIn">
				<div class="col-md-12">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/header/header_intro.jpg" alt="">
				</div>
			</div>
			
<!-- 			<div class="row">
				<ul class="navigation">
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Leistungen</a></li>
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Qualifikation</a></li>
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Kosten</a></li>
					<li class="navigation__item col-xs-12 col-md-3"><a href="#">Links</a></li>
				</ul>
			</div> -->

			<div class="row animated fadeIn">
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-1'); ?><br>
					<?php the_field('text_col-1'); ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-2'); ?><br>
					<?php the_field('text_col-2'); ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-3'); ?><br>
					<?php the_field('text_col-3'); ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<?php the_field('headline_col-4'); ?><br>
					<?php the_field('text_col-4'); ?>
				</div>												
			</div>
		</main>

<?php get_template_part('partials/footer'); ?>