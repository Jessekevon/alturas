<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">        
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<nav class="cd-nav">
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
			<?php  wp_nav_menu_no_ul(); ?>
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->


<ul class="cd-header-buttons">
<li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
</ul> <!-- cd-header-buttons -->

<header class="cd-main-header">

<a class="cd-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://localhost:8888/alturas/wp-content/uploads/2015/07/alturaslogo.png" alt="Logo"></a>
</header>


<main class="cd-main-content">
<!-- your content here -->


<div id="main" class="site-main">
