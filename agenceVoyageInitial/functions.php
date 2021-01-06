<?php 

// ---------------------------------------------------------------------------------------
/* FONCTION POUR LISTER LE STYLE */
function add_style(){
    /* Déclarer Google fonts */
    wp_enqueue_style(
        'font-google',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'
        // Le https n'est pas obligatoire
    );

    /* Déclarer la feuille de style css */
    wp_enqueue_style(
        'main-css',
        get_stylesheet_uri()
    );

    // Link avec le fichier JS 
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/script.js', '', '', true);
        // true permet de déclarer le JS comme étant lu à la fin du DOM 
        // l'agrument précédent (avant denrier argument) force une version, il s'agit souvent d'une date
    wp_enqueue_script('fa-script', '//kit.fontawesome.com/00a3624a11.js');
}

/* Ajouter une action pour afficher le CSS */
add_action('wp_enqueue_scripts', 'add_style');

// ---------------------------------------------------------------------------------------
// Ajout de la traduction des textdomain : 
load_theme_textdomain('voyagewp', get_template_directory() . '/languages');

// ---------------------------------------------------------------------------------------
// Ajout des images de mise en avant : 

add_theme_support('post-thumbnails');

// ---------------------------------------------------------------------------------------

// Si on utilise un Starter Theme, le menu est ajouté par défaut
register_nav_menus(array(
    'menuDesktop' => esc_html__('Principal', 'voyagewp' ), // Nom du menu => ('Affichage côté visiteur', 'Text Domain')
    'menuResp' => esc_html__('Mobile', 'voyagewp' )
));

// ---------------------------------------------------------------------------------------
// Ajout d'une fonctionnalité : logo personnalisé
// add_theme_support('custom-logo');
// add_theme_support ajout cela dans apparence/personnaliser

function themename_custom_logo_setup(){
    $default = array(
        'height' => 70, 
        'width' => 70, 
        'header-text' => array('site-title', 'site-description'), // permet d'alterner soit le logo soit le titre du site
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $default);
}

add_action('after_setup_theme', 'themename_custom_logo_setup');

// ---------------------------------------------------------------------------------------

/* WIDGET */

function init_widgets($id){
    register_sidebar(array(
        'name'   => 'Formulaire', 
        'id'     => 'form', 
        'before_widget'=> '<div>', 
        'after_widget'=> '</div>',
        'before_title' => '<h3>', 
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'init_widgets'); 


// ---------------------------------------------------------------------------------------
// Ceci est une ogranisation classique, elle est donc présente dans les Starter Theme.
// A faire dès que l'on crée le customizer pour ne pas oublier de le linker.

/**
 * Customizer additions.
 */
require get_template_directory(). '/inc/customizer.php';

/**
 * Implement the Custom CSS
 */
require get_template_directory(). '/inc/custom-css.php';