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
<html <?php language_attributes(); ?>>
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
			<nav class="navbar">
				<div class="container">
					<div class="navbar-brand side-branding">
						<?php the_custom_logo() ?>
						<span data-target="navbarMenu" class="navbar-burger burger">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</div> <!-- ./navbar-brand-->

					<div id="navbarMenu" class="navbar-menu">
						<div class="navbar-end">
							<div class="tabs is-right">
								<ul>
									<li class="is-active"><a>Home</a></li>
									<li><a href="">Examples</a></li>
									<li><a href="">Features</a></li>
									<li><a href="">Team</a></li>
									<li><a href="">Help</a></li>         
								</ul>
								<span class="navbar-item">
									<a class="button is-white is-outlined" href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/hero.html">
										<span class="icon">
											<i class="fa fa-github"></i>
										</span>
										<span title="Hello from the other side">View Source</span>
									</a>
								</span>
							</div>
						</div>
					</div> <!-- ./navbar-menu-->
				</div> <!-- ./Container-->
			</nav> <!-- ./Hero Nav-->
		</div> <!-- ./Hero Head-->
	</header>
	<div id="content" class="site-content">
