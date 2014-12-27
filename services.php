<?php
/*
   Template Name: Service Page
*/

 get_header(); ?>
 
		     <div class="fix slider-bottom_area">
		          <div class="fix structure slider-bottom">
					   <?php global $data; ?>
					   <?php if ($data ['slider_bottom_text_upload']): ?>
					       <p><?php echo $data['slider_bottom_text_upload']; ?><p/>
					   <?php else: ?>
						   <p>Hello, my name is <span>Jennifer Doe</span> and I'm a top freelance interior designer. This is my online portfolio. If you like my work, <span>contact me</span> and I'll see what I can do for you...</p>
					   <?php endif; ?>
			       </div>
			 </div>
			 
		     <div class="fix promo_area">
		         <div class="fix structure promo">
				 
				     <?php dynamic_sidebar('contenporary'); ?>
					 <?php dynamic_sidebar('traditional'); ?>
				     <?php dynamic_sidebar('interiors'); ?>
				     <?php dynamic_sidebar('visual'); ?>
			     
			  </div>
		  </div>
			      
<?php get_footer(); ?>	 