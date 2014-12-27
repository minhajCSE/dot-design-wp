<?php get_header(); ?>
		    
            <?php if(have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>  			
		     <div class="fix slider-bottom_area">
		          <div class="fix structure slider-bottom">
			           <?php get_template_part('post-excerpt'); ?>
			       </div>
			 </div>
			 
		     <div class="fix promo_area">
		         <div class="fix structure promo">
			           <?php the_content(); ?>
			     </div>
		     </div>
		<?php endwhile; ?>  
		<?php else : ?>
           <h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>		
        <?php endif; ?>  
			      
<?php get_footer(); ?>	 