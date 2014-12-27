<?php
/*
  Template Name: About Page
*/
 get_header(); ?>
	 
    <div class="about_us_area fix">
	    <div class="structure abou_us fix">
		    <div class="heading fix">
			    <?php global $data; ?>
			    <?php if ($data ['about_us_heading']): ?>
				   <h1><?php echo $data['about_us_heading']; ?><h1/>
			    <?php else: ?>
				   <h1>ABOUT US</h1>
			   <?php endif; ?>
			    
				<h5>Selected Poems by Indie Rock Stars</h5>
				<?php global $data; ?>
			    <?php if ($data ['about_us_para']): ?>
				   <p><?php echo $data['about_us_para']; ?><p/>
			    <?php else: ?>
				   <p class="text-center">In every step we walk and in all the words we talk, creativity flows perpetually all around us. When it's noted by open eyes and minds and hearts, these encounters are transformed into art - wide open for wonderment. So we've invited some fine musical artists to harness their powers of expression and collated them for your viewing pleasure. Think of it as little glimpse from an alternate standpoint into the inspired minds of the artists you love.</p>
						
				  <p class="text-center">Selected Poems by Indie Rock Stars lets you experience these colourful souls through poetry, stories and prose. Their up-top think tanks are open for exhibition, sans the usual musical accompaniment, simply presented in black and white word combos detailing the object of their attention from a moment gone, but captured. </p>
				 
				  <p class="text-center">We invite you to get comfy and immerse yourself into the shoes of this diverse range of talented folk and see if they can't transport you to a place where things are a little different, if only for a moment.</p>
			   <?php endif; ?>
				
			</div>
		</div>
	</div>
			 
			      
<?php get_footer(); ?>	 