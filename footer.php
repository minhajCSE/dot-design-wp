 <div class="fix footer_area">
			      <div class="fix structure footer">
				     <div class="fix footer-left floatleft">
					     <div class="fix footer-left-menu ">
						    
							<ul id="f-nav">
								 <li><a id="ft_current" href="">Home </a></li>
								 <li><a href="">About </a></li>
								 <li><a href="">Services </a></li>
								 <li><a href="">Portfolio </a></li>
								 <li><a href="">Contact </a></li>
					        </ul>
						     
						 </div>
					     <div class="fix footer-left-copyright">
						     <p>&copy;Copyright <?php the_date("Y"); ?>. All rights reserved. Template created by:<span><?php the_author('name'); ?></span>  /  www.vladimirbabic.net</p>
						 </div>
						 
					 </div>
				     <div class="fix footer-right floatright">
					      <div class="fix footer-right-logo">
						       <?php global $data; ?>
								<?php if ($data['footer_logo_uploader']): ?>
									<a href="<?php bloginfo('home'); ?>"><img src="<?php echo $data['footer_logo_uploader']; ?>" alt="" /></a>
								<?php else: ?>
						         <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" alt="" /></a>
					             <?php endif; ?>
						  </div>
					 </div>
				  </div>
		     </div>
			 
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
         $('#slider').nivoSlider();
      });
    </script>
<?php wp_footer(); ?>	
	 </body>
</html>