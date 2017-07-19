<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<nav id="utility-nav" class="utility-navigation pull-right">
		<div class="wrapper clear">
			<?php wp_nav_menu(array('theme_location'=>'menu-2', 'menu_id'=>'utility-menu')); ?>
		</div>
	</nav>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			<div class="site-branding pull-left">
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?> "> <img src="<?php echo get_template_directory_uri(); ?>/img/NTWWA-Logo-LR.png?>" alt="NTWWA Logo"></a></h1>
				
			</div><!-- .site-branding -->
			

			<nav id="site-navigation" class="main-navigation pull-right" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
