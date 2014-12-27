<?php
/*
   Template Name: Portfolio Page
*/

 get_header(); ?>

			 
		 <div class="fix promo_area">
		     <div class="fix structure promo">
			 
				 <?php dynamic_sidebar('contenporary'); ?>
				 <?php dynamic_sidebar('traditional'); ?>
				 <?php dynamic_sidebar('interiors'); ?>
				 <?php dynamic_sidebar('visual'); ?>
			     
			  </div>
		  </div>
			      
<?php get_footer(); ?>	 