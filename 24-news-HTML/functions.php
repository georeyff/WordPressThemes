<?php 

function theme_style(){
    /* Déclarer la feuille de style css */
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('boot1', get_template_directory_uri(). '/css/media_query.css'); 
    wp_enqueue_style('boot-2', get_template_directory_uri(). '/sass/style_1.scss'); 
    wp_enqueue_style('boot1', get_template_directory_uri(). '/css/bootstrap.css'); 
    wp_enqueue_style('boot3', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
    wp_enqueue_style('boot4', get_template_directory_uri(). '/css/animate.css'); 
    wp_enqueue_style('boot5', '//fonts.googleapis.com/css?family=Poppins'); 
    wp_enqueue_style('boot6', get_template_directory_uri(). '/css/owl.carousel.css'); 
    wp_enqueue_style('boot7', get_template_directory_uri(). '/css/owl.theme.default.css'); 
    wp_enqueue_style('boot8', get_template_directory_uri(). '/css/style_1.css');
    wp_enqueue_script('js-boot8', get_template_directory_uri(). '/js/modernizr-3.5.0.min.js');
    wp_enqueue_script('js-boot9', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', '', '', true);
    wp_enqueue_script('js-boot10', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '', true);
    wp_enqueue_script('js-boot11', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('js-boot12', get_template_directory_uri(). '/js/jquery.waypoints.min.js', '', '', true);
    wp_enqueue_script('js-boot13', get_template_directory_uri(). '/js/main.js', '', '', true);
    wp_enqueue_script('js-boot14', get_template_directory_uri(). '/js/owl.carousel.min.js', '', '', true);
    wp_enqueue_script('js-boot15', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', '', '', true);
}

add_action('wp_enqueue_scripts', 'theme_style');

// ---------------------------------------------------------------------------------------

