<?php
function add_style(){
    wp_enqueue_style('main-css', get_stylesheet_directory()); 
    
}

add_action('wp_enqueue_scripts', 'add_style'); 