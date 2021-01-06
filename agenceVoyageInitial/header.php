<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php wp_title(); ?></title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> -->
        <!-- <script src="https://kit.fontawesome.com/00a3624a11.js" crossorigin="anonymous"></script> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>> <!-- Gènère une classe différente en fonction de la balise CSS -->


    <section id="hero">
      
      <nav>
        <div id="logo"><?php the_custom_logo(); ?></div>
        
        <div id="menuDesktop">
            <!-- Le Menu Principal -->
            <!-- C'est un tableau car il peut avoir plusieurs informations à l'intérieur -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menuDesktop'
                ));
            ?>
        </div> 

        <!-- <div id="menuDesktop">
          <a href="#" target="_blank">Concept</a>
          <a href="#" target="_blank">Parcours</a>
          <a href="#" target="_blank">Blog</a>
        </div> -->

        <div id="menuResp">
          <img src="<?php echo get_template_directory_uri() . '/images/hamburger.png' ?>" alt="Responsive Menu Icon" id="hamburger" width="30px">
          <div id="menuMobile">
            <!-- <a href="#" target="_blank">Concept</a>
            <a href="#" target="_blank">Parcours</a>
            <a href="#" target="_blank">Blog</a> -->
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menuResp',
                ));
            ?>
          </div>
        </div>

      </nav><!--Ici, on referme la balise nav-->
