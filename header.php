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
		<img src="<?php echo get_theme_file_uri('images//top_widget.png');?>" alt="">
	</div>
		<nav class="top-nav">
		
		<div class="top-nav__logo-container">
			<a class="top-nav__logo-anchor" href="https://www.google.com/"> 
				<img class="top-nav__top-logo" src="<?php echo get_theme_file_uri('images/logo.png');?>" alt="">
			</a>
		</div>
		<div class="top-nav__navigation-container">
			<div class="main-menu">
			<ul class="main-menu__ul ">
				<li class="main-menu__li"><a class="main-menu__anchor" href="https://www.google.com/" style="background-image: url('<?php echo get_theme_file_uri('images/mb-menu-ico.svg');?>');">Betting Sites</a></li>
				<li class="main-menu__li"><a class="main-menu__anchor" href="https://www.google.com/" style="background-image: url('<?php echo get_theme_file_uri('images/mb-menu-ico.svg');?>');">Sports</a>
				<div class="main-menu__sub-menu-first-level"><span class="main-menu__mb-back"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
					<ul class="push-menu"> 
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">football<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">football1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">football2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">football3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">football4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">football5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">basketball<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">basketball1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">basketball2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">basketball3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">basketball4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">basketball5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">Baseball<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Baseball1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Baseball2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Baseball3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Baseball4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Baseball5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">Hockey<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Hockey1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Hockey2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Hockey3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Hockey4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Hockey5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">soccer<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">soccer1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">soccer2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">soccer3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">soccer4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">soccer5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">Fighting<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Fighting1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Fighting2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Fighting3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Fighting4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">Fighting5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">motor sport<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">motor sport1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">motor sport2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">motor sport3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">motor sport4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">motor sport5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">tennis<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">tennis1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">tennis2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">tennis3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">tennis4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">tennis5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">golf<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">golf1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">golf2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">golf3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">golf4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">golf5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">horse racing<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">horse racing1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">horse racing2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">horse racing3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">horse racing4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">horse racing5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">olympics games<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">olympics games1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">olympics games2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">olympics games3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">olympics games4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">olympics games5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">cycling<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">cycling1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">cycling2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">cycling3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">cycling4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">cycling5</a></li>
						</ul>
						</div>
					</li>
					<li class="push-menu__li"><a class="push-menu__anchor" href="#">esports<img class="push-menu__anchor-dk-ico" src="<?php echo get_theme_file_uri('images/sport-ico-white.svg');?>"><img class="push-menu__anchor-mb-ico" src="<?php echo get_theme_file_uri('images/sport-ico-blue.svg');?>"></a>
						<div class="push-menu__sub-menu-container"><span class="main-menu__mb-back-push"><img src="<?php echo get_theme_file_uri('images/mb-menu-back.svg');?>"></span>
						<ul class="push-menu__sub-menu-ul">
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">esports1</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">esports2</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">esports3</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">esports4</a></li>
							<li class="push-menu__sub-menu-li"><a class="push-menu__sub-menu-anchor" href="https://www.google.com/">esports5</a></li>
						</ul>
						</div>
					</li>
					</ul>
				</div>
				</li>
				<li class="main-menu__li"><a class="main-menu__anchor" href="https://www.google.com/" style="background-image: url('<?php echo get_theme_file_uri('images/mb-menu-ico.svg');?>');">odds	</a></li>
				<li class="main-menu__li"><a class="main-menu__anchor" href="https://www.google.com/" style="background-image: url('<?php echo get_theme_file_uri('images/mb-menu-ico.svg');?>');">picks </a></li>
				<li class="main-menu__li"><a class="main-menu__anchor" href="https://www.google.com/" style="background-image: url('<?php echo get_theme_file_uri('images/mb-menu-ico.svg');?>');">bonuses							</a></li>
			</ul>
			</div>
			<nav class="top-social-menu">
			<ul class="top-social-menu__ul">
				<li class="top-social-menu__li"><span class="top-social-menu__anchor open-top-search"><img  src="<?php echo get_theme_file_uri('/images/lupa.svg');?>" alt=""></span></li>
				<li class="top-social-menu__li hide-ico"><span class="top-social-menu__anchor"><img src="<?php echo get_theme_file_uri('images/location.svg');?>" alt=""></span></li>
				<li class="top-social-menu__li hide-ico"><span class="top-social-menu__anchor"><img src="<?php echo get_theme_file_uri('images//star.svg');?>" alt=""></span></li>
				<li class="top-social-menu__li hide-ico"><span class="top-social-menu__anchor"><img src="<?php echo get_theme_file_uri('images/person.svg');?>" alt=""></span></li>
				<li class="top-social-menu__li"><span class="top-social-menu__hamburger">
				<img class="top-social-menu__hamburger-open" src="<?php echo get_theme_file_uri('images/hamburger-ico.svg');?>" alt="">
				<img class="top-social-menu__hamburger-close" src="<?php echo get_theme_file_uri('images/hamburguer-close.svg');?>" alt=""></span></li>
			</ul>
			</nav>
		</div>
		<div class="top-nav__search"><a class="top-nav__search-logo-anchor" href="https://www.google.com/"> <img class="top-nav__search-top-logo" src="<?php echo get_theme_file_uri('images/');?>logo.png" alt=""></a>
			<input class="top-nav__search-input" type="search" name=""><img class="close-top-search" src="<?php echo get_theme_file_uri('images/');?>hamburguer-close.svg" alt="">
		</div>
		</nav>
		<div class="top-secondary-menu">
		<ul class="top-secondary-menu__ul">
			<li class="top-secondary-menu__li"><a class="top-secondary-menu__anchor" href="https://www.google.com/">US Betting Radar</a></li>
			<li class="top-secondary-menu__li"><a class="top-secondary-menu__anchor" href="https://www.google.com/">news</a></li>
			<li class="top-secondary-menu__li"><a class="top-secondary-menu__anchor" href="https://www.google.com/">learning</a></li>
		</ul>
		</div>
	</div>
	</header>
	<section class="main-container">

