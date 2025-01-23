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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>







    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">

            <div id="site-navigation" class="main-navigation">
                <div class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
                <div class="burger">
                    <span></span>

                </div>
            </div>
            <!-- menu burger -->
            <nav class="menu">
                <img class="image-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/petit-logo.png'; ?>" alt="logo">
                <ul>
                    <li><a class="menu_link" href="#story">Histoire</a></li><br>
                    <li><a class="menu_link" href="#characters">Personnages</a></li><br>
                    <li><a class="menu_link" href="#place">Lieu</a></li><br>
                    <li><a class="menu_link" href="#studio">Studio Koukaki</a></li><br>
                </ul>
                <img class="flower-orchid rotate-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/orchid.png'; ?>" alt="Orchidée">
                <img class="cat_orange float-menu1" src="<?php echo get_stylesheet_directory_uri() . '/assets/cat-orange.png'; ?>" alt="chat orange">
                <img class="cat_blue float-menu2" src="<?php echo get_stylesheet_directory_uri() . '/assets/cat-blue.png'; ?>" alt="chat bleu">
                <img class="cat_black float-menu3" src="<?php echo get_stylesheet_directory_uri() . '/assets/cat-black.png'; ?>" alt="chat noir">
                <img class="flower-orchid rotate-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/orchid.png'; ?>" alt="Orchidée">
                <img class="flower rotate-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/flower.png'; ?>" alt="Fleur">
                <img class="sunflower rotate-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/Sunflower.png'; ?>" alt="Tournesol">
                <img class="random_flower rotate-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/random_flower.png'; ?>" alt="Fleur diverse">
                <img class="hibiscus rotate-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/Hibiscus footer.png'; ?>" alt="hibiscus">
                <img class="studio_koukaki" src="<?php echo get_stylesheet_directory_uri() . '/assets/studio-koukaki-titre.png'; ?>" alt="Studio Koukaki">
            </nav>
        </header><!-- #masthead -->