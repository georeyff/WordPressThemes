<?php
function add_style(){
    wp_enqueue_style('main-css', get_stylesheet_uri()); 
    wp_enqueue_style('asset', get_template_directory_uri(). '/assets/css/main.css'); 
    wp_enqueue_style('no-asset', get_template_directory_uri(). '/assets/css/noscript.css');
    wp_enqueue_script('js-1', get_template_directory_uri(). '/assets/js/jquery.min.js', '', '', true); 
    wp_enqueue_script('js-2', get_template_directory_uri(). '/assets/js/browser.min.js', '', '', true); 
    wp_enqueue_script('js-3', get_template_directory_uri(). '/assets/js/breakpoints.min.js', '', '', true); 
    wp_enqueue_script('js-4', get_template_directory_uri(). '/assets/js/util.js', '', '', true); 
    wp_enqueue_script('js-5', get_template_directory_uri(). '/assets/js/main.js', '', '', true); 

}

add_action('wp_enqueue_scripts', 'add_style'); 

add_theme_support('post-thumbails'); 

// ---------------------------------------------------------------------------------------

// Si on utilise un Starter Theme, le menu est ajouté par défaut
register_nav_menus(array(
    'menuDesktop' => esc_html__('Principal', 'boutique' ) // Nom du menu => ('Affichage côté visiteur', 'Text Domain')
));

// ---------------------------------------------------------------------------------------