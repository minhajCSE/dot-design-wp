<?php get_header(); ?>
		    
        <div class="single-post-area fix">
		    <div class="structure single-post fix">
			     <div class="content fix">
					<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
						<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
                    <?php comments_template(); ?>				
					<?php endwhile; ?>
					 
					<?php else : ?>
						<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
					<?php endif; ?>
		        </div>
			</div>
		</div>			
		
			 
			 
			      
<?php get_footer(); ?>	 