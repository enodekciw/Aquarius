<?php
/**
 * Main header template.
 * 
 * Include it with get_header();
 *
 * @package WordPress
 * @subpackage Aquarius
 * @since Aquarius 1.0
 * @author wplovin <hello@wplovin.com>
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title><?php wp_title( '&mdash;', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo WPLOVIN_THEME_PATH; ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header-main">
		<div class="inside half-padding-v full-padding-h">
			<a id="logo" href="<?php echo esc_url( home_url() ); ?>"><?php echo bloginfo('title'); ?></a>
		</div>
	</header>
	
	<nav id="navigation-main" role="navigation">
	
		<?php if ( has_nav_menu( 'primary' ) ) {
			$menu_args = array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav-menu full-padding cf',
				'container'      => 'none'
			);  
			wp_nav_menu( $menu_args ); 
		} else { ?>
			<ul class="nav-menu-none full-padding cf">
				<li><a href="<?php echo admin_url( 'nav-menus.php' ); ?>"><?php _e( 'Menu doesn\'t exist. Create a new one.', 'aquarius' ); ?></a></li>
			</ul>
		<?php } ?>
		
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<div id="sidebar-handler">
			<i class="fa fa-chevron-left"></i>
		</div>		
		<?php } ?>
		
		<div id="responsive-menu-handler">
			<i class="fa fa-bars"></i>
		</div>
	</nav>