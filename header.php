<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feb_Slim
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'feb-slim'); ?></a>

		<header id="masthead" class="site-header">

			<div class="container-fluid">
				<div class="row">

					<!-- top naigatoin -->
					<div class="col-12 text-right">
						<div class="top_menu">
							<ul>
								<li id="search_icon">
									<span title="Search"><i class="fas fa-search"></i></span>
								</li>
								<li>
									<a id="cart" href="<?php echo wc_get_cart_url(); ?>" title="Cart"><i class="fas fa-shopping-cart"></i></a>
								</li>
								<li>
									<a id="my_account" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" title="<?php _e('My Account', ''); ?>"><i class="fas fa-user"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<!-- search bar -->
					<div id="ajax_search_wrap">
						<form role="search" method="get" class="search-form" action="http://localhost/wp/" autocomplete="off">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 col-12 col-md-8 col-lg-8 col-xl-8 offset-md-2 offset-lg-2 offset-xl-2">
										<div class="ajax_search">
											<input id="searchInput" onkeyup="fetchResults()" type="text" class="search-field" value="<?php echo get_search_query(); ?>" placeholder="Search …" name="s">
											<button id="submit" type="submit"><i class="fas fa-search"></i></button>
											<div id="datafetch"></div>
										</div>
										<div id="close_search"><i class="fas fa-times"></i></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>


				<div class="col-12">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$feb_slim_description = get_bloginfo('description', 'display');
						if ($feb_slim_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $feb_slim_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
			</div>
	</div>



	<nav class="navbar navbar-expand-md navbar-light text-center" role="navigation">
		<div class="container-fluid">

			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Primary Menu', 'feb-slim'); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
			wp_nav_menu(array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			));
			?>

		</div>
	</nav>

	<!--custom  notice -->
	<div class="custom_notice" style="width:100%;overflow:hidden;display:flex;text-align:center;background-color:yellow;min-height:40px;justify-content:center;padding-top:1rem;padding-bottom:1rem;font-size:2rem;font-weight:bold;color:black;"><span>Vefsíðan er í vinnslu.</span></div>
	
	</header><!-- #masthead -->