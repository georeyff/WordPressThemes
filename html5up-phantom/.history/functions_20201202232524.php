<?php
function add_style(){
    wp_enqueue_style('main-css', get_stylesheet_uri()); 
    wp_enqueue_style('asset', get_stylesheet_directory_uri(). '/assets/css/main.css'); 
    wp_enqueue_style('no-asset', get_stylesheet_directory_uri(). '/assets/css/noscript.css');
    wp_enqueue_script('js-1', get_stylesheet_directory_uri(). '/assets/js/jquery.min.js', '', '', true); 
    wp_enqueue_script('js-2', get_stylesheet_directory_uri(). '/assets/js/browser.min.js', '', '', true); 
    wp_enqueue_script('js-3', get_stylesheet_directory_uri(). '/assets/js/breakpoints.min.js', '', '', true); 
    wp_enqueue_script('js-4', get_stylesheet_directory_uri(). '/assets/js/util.js', '', '', true); 
    wp_enqueue_script('js-5', get_stylesheet_directory_uri(). '/assets/js/main.js', '', '', true); 

}

add_action('wp_enqueue_scripts', 'add_style'); 