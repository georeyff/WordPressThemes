<?php
function add_style(){
    wp_enqueue_style('main-css', get_stylesheet_directory()); 
    wp_enqueue_style('asset', get_stylesheet_directory_uri(). 'assets/css/main.css'); 
    wp_enqueue_style('no-asset', get_stylesheet_directory_uri(). 'assets/css/noscript.css');
    wp_enqueue_script('js-1', get_stylesheet_directory_uri(). 'assets/js/jquery.min.js'); 
     
}

add_action('wp_enqueue_scripts', 'add_style'); 