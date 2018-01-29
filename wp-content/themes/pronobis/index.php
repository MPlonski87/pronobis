<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
    
   <!-- wird noch ausgefüllt --> 
    
</head>
<body>
 
<div id="wrapper">
    
   <div id="header"></div><!-- header -->
    
   <div id="main">
       
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      	 <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; ?>
       
         <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
      <?php endif; ?>

      <h1>works123</h1>

   </div><!-- main -->
    
   <div id="sidebar"></div><!-- sidebar -->  
    
   <div id="footer"></div><!-- footer -->
    
</div><!-- wrapper -->
    
</body>
</html>