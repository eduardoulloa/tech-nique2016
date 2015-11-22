<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta charset="8" />
	
	<?php wp_head(); ?>
	
	<!--THIS TELLS DEVICES NOT TO LIE ABOUT THEIR WIDTH-->

	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	
	<link rel="icon" href="img/favicon.png" type="<?php bloginfo('template_directory'); ?>/img/favicon.png" />

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	
	<!--Google fonts - Validate fonts as needed -->

	<!-- 
		 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,400' rel='stylesheet' type='text/css'>
		 
		 <link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
		 <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
		 <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
		 <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		 
	-->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Hind:400,500' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

</head>
<?php if(is_page('Home')) { ?>
<body id="home">
<? } else { ?>
<body id="int" <?php body_class( $class ); ?>> 
<? } ?>

	<header>
    <div id="headtop">
        <div class="grid-container">
    
          <div class="logo">
    
            <a href="<?php bloginfo('url'); ?>">
              <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
            </a>
    
          </div>
		  
		  
          <div style="float:right" class="head-icons">		  			
            
            <img src="<?php bloginfo('template_directory'); ?>/img/asa.png" alt="Logo">
    
            <div class="social">
    
              <div id="linked"><a target="_blank" href="http://www.linkedin.com/company/5025162?trk=tyah&trkInfo=tas%3Atech-niq%2Cidx%3A1-1-1">
    
                <img class="show" src="<?php bloginfo('template_directory'); ?>/img/link.png" alt="Social Media">
    
                <img class="hide" src="<?php bloginfo('template_directory'); ?>/img/link1.png" alt="Social Media">
    </a>
              </div>
    
              <div id="face"><a target="_blank" href="http://facebook.com/techniquepartners">
    
                <img class="show" src="<?php bloginfo('template_directory'); ?>/img/face.png" alt="Social Media">
    
                <img class="hide" src="<?php bloginfo('template_directory'); ?>/img/face1.png" alt="Social Media">
    </a>
              </div>
    
              <div id="twit"><a target="_blank" href="https://twitter.com/TNPartners">
    
                <img class="show" src="<?php bloginfo('template_directory'); ?>/img/twit.png" alt="Social Media">
    
                <img class="hide" src="<?php bloginfo('template_directory'); ?>/img/twit1.png" alt="Social Media">
    </a>
              </div>
              
    
            </div>
    
          </div>
		  
		  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label><input type="search" class="search-field" placeholder="Search"  value="<?php echo get_search_query(); ?>" id="s" name="s" title="Search after:"></label>
			<input type="submit" class="search-submit" value="Search"></form>
    
    
        </div><!-- end grid-container -->
    </div>
    <div id="bottom">	
        <div class="grid-container" >	
    
          <nav id="main">
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'nav-menu' ) ); ?>
                </nav>
    
        </div><!-- end grid-container -->
    </div>
	</header>

	<div id="main-content">

		
			