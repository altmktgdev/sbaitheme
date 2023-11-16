<?php
	/**
	* The header.
	*
	* This is the template that displays all of the <head> section and everything up until main.
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package WordPress
	* @subpackage Twenty_Twenty_One
	* @since Twenty Twenty-One 1.0
	*/   
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, user-scalable=yes">
	<!-- IE Compatibility -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<!-- Apple Mobile Web App Settings -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<!-- Miscellaneous -->
	<meta name="format-detection" content="telephone=no">
	<meta name="MobileOptimized" content="width">
	<meta name="HandheldFriendly" content="true">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="https://fonts.cdnfonts.com/css/metropolis-2" rel="stylesheet">
	<title><?php wp_title( ' | ', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<main class="main-wrapp">
	<div class="blurry-overlap"></div>
	<header class="main-header">
	<div class="main-header__container">
		<div class="top-widget">
			<?php dynamic_sidebar( 'top-widget' ); ?>
		</div>
		<nav class="top-nav">		
			<div class="top-nav__logo-container">
				<?php
					$logo = get_theme_file_uri()."/images/logo.png";
					if(esc_url(wp_get_attachment_url(get_theme_mod('custom_logo')))){
					$logo = esc_url(wp_get_attachment_url(get_theme_mod('custom_logo')));
					}
				?>
				<a class="top-nav__logo-anchor" href="<?php echo home_url(); ?>"> 
					<img class="top-nav__top-logo" src="<?php echo $logo; ?>" alt="Sport Betting AI logo">
				</a>
			</div>
			<div class="top-nav__navigation-container">
				<?php get_template_part( 'template-parts/main-menu' );?>
				<?php get_template_part( 'template-parts/top-social-menu' );?>
			</div>			
			<div class="top-nav__search">
				
					<a class="top-nav__search-logo-anchor" href="<?php echo home_url(); ?>"> 
						<img class="top-nav__search-top-logo" src="<?php echo $logo; ?>" alt="">
					</a>	
					<form class="top-nav__form" action="/" method="get">				
						<input class="top-nav__search-input" type="search" name="s">	
					</form>				
					<img class="close-top-search" src="<?php echo get_theme_file_uri('images/');?>hamburguer-close.svg" alt="">
				
			</div>			
		</nav>
		<div class="top-secondary-menu">
			<?php get_template_part( 'template-parts/top-secondary-menu' );?>
		</div>
	</div>
	</header>
	<section class="main-container">

