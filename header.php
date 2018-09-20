<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jorizon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/safari-pinned-tab.svg" color="#080808">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-config" content="<?php bloginfo( 'template_url' ); ?>/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jorizon' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="site-branding">
			<?php
			if ( is_front_page()) :
				?>
                <div class="hero" style="background-image: url('<?php header_image(); ?>')">
                    <div class="logo" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/Johannes-lesser-new-logo.svg)"></div>
                </div>
				<?php
				$jorizon_description = get_bloginfo( 'description', 'display' );
				if ( $jorizon_description || is_customize_preview() ) :
					?>
                    <h1 class="subtitle"><?php echo $jorizon_description; /* WPCS: xss ok. */ ?></h1>
				<?php endif;
			endif; ?>
        </div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation menu">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jorizon' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
                'menu_class'     => 'menuitems',
			) );
			?>
            <div class="socialmedia"><a href="https://www.instagram.com/jorizon/?hl=de" class="sociallogo"
                                        style="    background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/Asset-17.svg);"></a>
            </div>
            <div class="socialmedia"><a href="https://www.instagram.com/jorizon/?hl=de" target="_blank"
                                        class="sociallogo"></a></div>
            <?php
            if ( !is_front_page() || !is_home() ) :
                ?>
                <div class="socialmedia leftbar">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sociallogo homelogo" rel="home"
                       style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/assets/Johannes-lesser-new-logo.svg)"></a>
                </div>
                <?php
            endif; ?>

		</nav><!-- #site-navigation -->



	</header><!-- #masthead -->

	<div id="content"
         class="site-content <?php if ( is_front_page()) echo 'sectionlast'?>">
