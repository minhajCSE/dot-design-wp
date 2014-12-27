<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
     <head>
	     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/css/default/default.css" type="text/css"/>
	     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/light/light.css" type="text/css"/>
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark/dark.css" type="text/css"/>
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bar/bar.css" type="text/css"/>
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default/default.css" type="text/css"/>
		 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" type="text/css"/>
		 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		 <meta name="viewport" content="width=device-width, initial-scale=1"/>
		 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
		 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		 <?php wp_get_archives('type=monthly&format=link&limit=12'); ?>
		
		 <link rel="profile" href="http://gmpg.org/xfn/11" />
		
<?php wp_head(); ?>
		 
	 </head>
     <body>
	      <div class="fix header_area">
		     <div class="fix structure header">
				 <div class="fix logo">
				 
				    <?php global $data; ?>
					<?php if ($data ['logo_uploader']): ?>
					    <a href="<?php bloginfo('home'); ?>"><img src="<?php echo $data['logo_uploader']; ?>" alt="" /></a>
					<?php else: ?>
						<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
					<?php endif; ?>
					 
				 </div>
			 </div>
		  </div>
		     <div class="fix mainmenu_area">
				 <div class="fix structure mainmenu">
					 
					 <?php
						if (function_exists('wp_nav_menu')) {
							wp_nav_menu(array('theme_location' => 'wpj-main-menu', 'menu_id' => 'nav', 'fallback_cb' => 'wpj_default_menu'));
						}
						else {
							wpj_default_menu();
						}
						?>
					   
					  <div class="fix search_box floatright">
					      <form action="">
							 <input type="text1" placeholder="Search"/><br/>
						 </form>
					  </div>
				 </div>
				 <div class="fix zigzag_bottom"></div>
			 </div>
			