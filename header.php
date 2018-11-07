<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fjordstudio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<script src="https://use.fontawesome.com/294612394e.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="theme-color" content="#ffdead">
	<meta name="apple-mobile-web-app-status-bar-style" content="#ffdead">
		
	<meta name="apple-mobile-web-app-capable" content="yes"> <!-- iOS -->
  <meta name="mobile-web-app-capable" content="yes"> <!-- Android -->
	
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'fjordstudio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<div id="site-navigation" class="main-navigation" role="navigation">
		<?php // wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			
			<?php
					$args = array(
						'container_class' => 'site-menu',
						'menu_class' => 'main-menu',
						'theme_location' => 'primary',
						'container' => 'nav',
						'items_wrap' => '<ul>%3$s</ul>'
					);
					wp_nav_menu($args);
				?>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
