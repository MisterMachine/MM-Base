<?php
/**
 * @package WordPress
 * @subpackage 
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>	<html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>	<html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>	<html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="description" content="" />
	<meta name="author" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="wrapper">

	<div id="header" class="container_16 clearfix">
	
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		
		<?php get_search_form(); ?>
		
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

	<div class="container_16 clearfix">