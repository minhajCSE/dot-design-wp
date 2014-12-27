<?php
/*
  Template Name: Home Template
*/
 get_header(); ?>
		     <div class="fix slider_area">
			     <div class="fix structure slider">
				     <div class="slider-wrapper theme-default">
						 <div id="slider" class="nivoSlider">
							 <?php if(!is_paged()) { ?>
								<?php
									$args = array( 'post_type' => 'slider', 'posts_per_page' => 12 );
									$loop = new WP_Query( $args );
								?>  
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
									
									<?php the_post_thumbnail('slider-image', array('class' => 'postthumbnails')); ?>						
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
								<?php } ?>
						 </div>
					  </div>	 
			     </div>
			  </div>	 
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
			   
		     <div class="fix featured_area">
		          <div class="fix structure featured">	
					   <?php if(!is_paged()) { ?>
						<?php
							$args = array( 'post_type' => 'promo', 'posts_per_page' => 3 );
							$loop = new WP_Query( $args );
						?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
							<?php the_post_thumbnail('promo-image', array('class' => 'postthumbnails')); ?>						
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>
				 </div>
			 </div>   
			 
			 
		     <div class="fix footer-top_area">
		         <div class="fix structure footer-top">
					  <div class="fix footer-top-promo floatleft">
						  <h2>Latest Posts</h2>
						  <ul>
								<?php
								query_posts('posts_per_page=5'); // query to show all posts independant from what is in the center;
								if (have_posts()) :
								   while (have_posts()) :
									  the_post(); ?>
								<li>
									  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</li>
								<?php  endwhile;
								endif;
								wp_reset_query();
								?>
						  </ul>
						  
					  </div>
					  
			         <?php dynamic_sidebar('twitter-post'); ?>
					 
					  <div class="fix footer-top-promo2 floatleft">
						  <h2>Contact Info</h2>
						  <p>A: Street 95, United States</p>
						  <p>T: + (0) 000-1234-5678</p>
						  <p>F: + (0) 000-1234-5678</p>
						  <p>E: yourmail@yoursite.com</p>
						  <p>E-2: yourmail2@yoursite.com</p>
					  </div>
			         <div class="fix footer-top-promo3 floatleft">
					     <h2>Newsletter Signup</h2>
						 <form action="">
							 <label for="name">Name<span>*</span></label><br/>
							 <input type="text" name="name"/><br/>
							 <label for="name">Email<span>*</span></label><br/>
							 <input type="text" name="name"/><br/>
							 <input type="submit" value="Sign Up Now"/>
						 </form>
				     </div>
				  </div>
			 </div>
			      
<?php get_footer(); ?>	 