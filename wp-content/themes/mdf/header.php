<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MDF
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/assets/img//apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/img//favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">	

	<header class="b-header" role="banner">
		<div class="row">
			<div class="large-4 columns">
				<a href="/" class="b-header__logo">
					<img class="show-for-medium" src="<?php echo get_template_directory_uri();?>/assets/img/mdf_logo.png" alt="Michael Denis Fitness Logo">
					<img class="hide-for-medium" width="100px" src="<?php echo get_template_directory_uri();?>/assets/img/mdf-logo-mobile.png" alt="Michael Denis Fitness Logo">
				</a>
				<a class="b-header__hamburger">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/hamburger.svg" alt="Mobile Menu">
				</a>
			</div>
			<div class="b-mobile-menu large-8 medium-6 columns">
				<ul class="b-social--header">
					<li class="b-social__profile">
						<a href="https://www.facebook.com/michaeldenisfitness/" target="blank"><i class="fa fa-facebook-official"></i></a>
					</li>
					<li class="b-social__profile">
						<a href="https://www.instagram.com/michael_denis_fitness/" target="blank"><i class="fa fa-instagram"></i></a>
					</li>
					<li class="b-social__profile">
						<a href="https://www.yelp.com/biz/michael-denis-fitness-santa-monica-3" target="blank"><i class="fa fa-yelp"></i></a>
					</li>
				</ul>
				<nav role="navigation">
					<ul class="b-menu">
						<li class="b-menu__item"><a href="#about" class="b-menu__link">About</a></li>
						<li class="b-menu__item"><a href="#training" class="b-menu__link">Personal Training</a></li>
						<li class="b-menu__item"><a href="#matrix" class="b-menu__link">Matrix</a></li>
						<li class="b-menu__item"><a href="#programs" class="b-menu__link">Programs</a></li>
						<li class="b-menu__item"><a href="#contact" class="button hollow">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
