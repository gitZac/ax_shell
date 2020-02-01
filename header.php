<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AxShell
 */

?>
<!doctype html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ax_shell' ); ?></a>
	<header id="masthead" class="site-header hero is-info is-medium is-bold">
		<nav class="navbar" aria-label="main navigation">
			<div class="container">
				
				<?php get_template_part('template-parts/header/branding'); ?>

				<div id="primary-menu" class="navbar-menu ">
					<div class="navbar-end">
						<?php wp_nav_menu(array(
							'theme-location' => 	'header-menu', //change it according to your register_nav_menus() function
							'depth'			 =>		3,
							'menu'			 =>		'NewNav',
							'container'		 =>		'',
							'menu_class'	 =>		'',
							'items_wrap'	 =>		'%3$s',
							'walker'		 =>		new ax_Bulma_Walker_Nav_Hero(),
							'fallback_cb'	 =>		'Bulma_NavWalker::fallback'
						));
						?>
					</div> <!-- ./Navbar-End-->
				</div> <!-- ./#Primary Menu-->
			</div> <!-- ./Container-->
		</nav> <!-- ./Navbar-->
	</header>

	<?php get_template_part( 'template-parts/hero/hero', 'main' ); ?>


	<div id="content" class="site-content">
