<?php
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );
function mon_theme_enfant_enqueue_styles()
{
    // Charger le style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Charger le style du thème enfant
    wp_enqueue_style('child-theme', trailingslashit(get_stylesheet_directory_uri()) . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'mon_theme_enfant_enqueue_styles');


function mon_theme_enfant_enqueue_scripts()
{
    // Charger le script JavaScript personnalisé
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mon_theme_enfant_enqueue_scripts');



// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
