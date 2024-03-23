<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li class="site-title "><a href="<?php echo (get_site_url())?>" rel="home">Fleurs d'oranger & chats errants</a></li>
            </ul>

            <div id="menu" class="menu" aria-controls="primary-menu" aria-expanded="false">
                <button class="menu_burger menu-open">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <div class="menu_content">
                    <img class="menu_content--logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="">
                    <ul>
                        <li class="menu_content--story flower cat"><a href="#story">Histoire</a></li>
                        <li class="menu_content--characters flower cat"><a href="#characters">Personnages</a></li>
                        <li class="menu_content--place flower cat"><a href="#place">Lieu</a></li>
                        <li class="menu_content--studio flower cat"><a href="#studio">Studio Koukaki</a>
                        </li>
                    </ul>

                    <div class="menu_content--footer menu-trigger flower cat">
                        <a href="#">STUDIO KOUKAKI</a></li>
                    </div>

                </div>
            </div>

        </nav><!-- #site-navigation -->
	</header><!-- #masthead -->
