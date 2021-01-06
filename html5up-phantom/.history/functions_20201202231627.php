<?php
function add_style(){
    wp_enqueue_style('main-css', get_stylesheet_directory()); 
    wp_enqueue_style('asset', get_stylesheet_directory_uri(). 'assets/css/main.css'); 
    
}

add_action('wp_enqueue_scripts', 'add_style'); 