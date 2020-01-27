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
		<div class="hero-head">
			<nav class="navbar" aria-label="main navigation">
				<div class="container">
					<div class="navbar-brand">
						<a class="navbar-item" href="<?php echo esc_url( home_url( '/' ) );?>">
							<?php the_custom_logo(); ?>
						</a>

						<button class="button navbar-burger is-active" data-target="primary-menu" aria-controls="primary-menu" aria-haspopup="true" aria-label="Menu Button" aria-pressed="false">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</button>
					</div>

					<div id="primary-menu" class="navbar-menu is-active">
						<div class="navbar-end">
							<?php wp_nav_menu(array(
								'theme-location' => 'header-menu', //change it according to your register_nav_menus() function
								'depth'		=>	3,
								'menu'			=>	'NewNav',
								'container'		=>	'',
								'menu_class'		=>	'',
								'items_wrap'		=>	'%3$s',
								'walker'		=>	new ax_Bulma_Walker_Nav_Hero(),
								'fallback_cb'		=>	'Bulma_NavWalker::fallback'
							));
							?>
						</div> <!-- ./Navbar-End-->
					</div> <!-- ./#Primary Menu-->
				</div> <!-- ./Container-->
			</nav> <!-- ./Navbar-->
		</div> <!-- ./Hero Head-->
        <section class="hero is-medium is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">Welcome to Ax_</h1>
                    <h2 class="subtitle">A bulma-based WP Theme. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde exercitationem repudiandae recusandae minima consectetur nostrum illo, eum maxime quos laborum libero accusantium ipsam ipsum iure rerum dolorem. Enim, quis temporibus?</h2>
                </div>
            </div> <!-- ./Hero Body-->
        </section> <!-- ./Hero -->
	</header>
	<div id="content" class="site-content">
