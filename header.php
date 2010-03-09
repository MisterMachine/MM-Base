<?php
/**
 * @package WordPress
 * @subpackage mm-base
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php echo CSS . '/reset.css'; ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo CSS . '/text.css'; ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo CSS . '/960.css'; ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo CSS . '/theme.css'; ?>" type="text/css" media="screen" />


<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="wrapper">

	<div id="header" class="container_16 clearfix">
    
    <div id="header-wrp" class="grid_16">
	    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	    
	    <!--<?php get_search_form(); ?>-->
	    
			<div id="nav" class="grid_12"><!-- START nav -->
				<ul>
					<li id="selected"><a href="logistics.html">Logistics</a></li>
					<li><a href="character.html">Character Information</a></li>
					<li><a href="sign-up.html">Sign Up</a></li>
					<li><a href="forum.html">Forum</a></li>
					<li><a href="credits.html">Credits</a></li>
					<li class="last"><a href="documentation.html">Documentation</a></li>
				</ul>
			</div><!--END nav -->
			
	  </div>
  </div>
  
  <div id="content" class="fluid">
  	
  	<div id="framer" class="container_16 clearfix">
  	 <div id="banner" class="grid_16"></div>
  	 
  	 <div id="wrp-sigin-up" class="grid_16">
  	     <form id="sign-up" action="">
  	     <h3>Sign Up for Our Newsletter Now!</h3>
  	     <input class="mailer" type="text" />
  	     <input type="image" src="../img/" />
  	     </form>
  	 </div>