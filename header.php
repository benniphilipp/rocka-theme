<?php
/**
 * The Header for our theme
 *
 *
 * @package Wordpress
 * @subpackage Rocka
 * @since rocka 1.0
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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--nav navbar-nav navbar-right-->
	<?php wp_head(); ?>
</head>

<div class="container"><?php
	wp_nav_menu( array(
			'menu' => 'top-bar',
			'menu_class' => '',
			'depth'=> 3,
			'container'=> false,
			'walker'=> new WP_Bootstrap_Navwalker));
?></div>

<body <?php body_class(); ?>>
