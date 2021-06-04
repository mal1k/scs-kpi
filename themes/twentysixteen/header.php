<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<section id="sp-logo" class="lt-logo">
	<div class="row site-inner logo-pad">
		<div id="sp-logo" class="col-lg-12 ">
			<div class="sp-column ">
				<ul class="sp-contact-info">
					<span class="headerSiteName"><?php bloginfo( 'name' ); ?></span>
				</ul>
				<div class="logo">
				<a href="#">
					<?php echo get_custom_logo(); ?>
				</a>
				</div>
			</div>
		</div>
	</div>
</section>

<header id="masthead" class="header-all-page site-header " role="banner">
	<div class="site-header-main site-inner">
		<div class="site-branding">

		</div><!-- .site-branding -->

		<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
			<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

			<div id="site-header-menu" class="site-header-menu">
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class' => 'primary-menu',
								)
							);
						?>
						
					</nav><!-- .main-navigation -->
				<?php endif; ?>

				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'  => 'social-links-menu',
									'depth'       => 1,
									'link_before' => '<span class="screen-reader-text">',
									'link_after'  => '</span>',
								)
							);
						?>
					</nav><!-- .social-navigation -->
				<?php endif; ?>
			</div><!-- .site-header-menu -->
		<?php endif; ?>
	</div><!-- .site-header-main -->

</header><!-- .site-header -->

	<div class="site-inner">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a> -->
		<div id="content" class="site-content">
