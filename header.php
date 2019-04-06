<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myexamtheme
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'myexamtheme' ); ?></a>

	<header id="masthead" class="site-header">
        <nav class="menu">
            <div class="menu__icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'menu__links',

            ) ); ?>
        </nav><!-- #site-navigation -->
        <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        } ?>
        <?php  if (is_active_sidebar('search')) : ?>
            <?php dynamic_sidebar('search'); ?>
        <?php endif; ?>
	</header><!-- #masthead -->

