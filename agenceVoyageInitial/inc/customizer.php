<?php 

function voyages_customizer_options($wp_customize){

    $wp_customize -> add_section('hero', array(
        'title'         => __('Section Hero', 'voyagewp'), // title => ('Titre' + 'textdomain')
        'description'   => sprintf(__('Ici les informations', 'voyagewp')), // sprintf() : retourne une variable
        'priority'      => 1
    ));

    // le '__' permet de traduire en une chaîne de caractères.
    // voyagewp est le text domain qui permet de récupérer les chaines de caractère pour un logiciel de traduction

    // Changement du Titre  
    $wp_customize -> add_setting('hero_titre', array(
        'default'       => sprintf(__('Agence de voyage', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('hero_titre', array(
        'label'         => __('Titre', 'voyagewp'),
        'section'       => 'hero'
    ));

    // Le add_setting et le add_control ont le même id 'hero_titre' car ils sont liés.
    // Concernant la section, on met 'hero' car on a mit 'hero' en haut.

    // Changement du Texte Bouton 
    $wp_customize -> add_setting('hero_bouton', array(
        'default'       => sprintf(__('Concept', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('hero_bouton', array(
        'label'         => __('Titre du bouton', 'voyagewp'),
        'section'       => 'hero'
    ));

    // Changement du Lien Bouton 
    $wp_customize -> add_setting('hero_bouton_lien', array(
        'default'       =>  __('Lien A propos', 'voyagewp'), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'hero_bouton_lien', array(
        'label'         => __('Lien du bouton', 'voyagewp'),
        'section'       => 'hero',
        'type'          => 'select',    // permet d'ajouter des choix
        'choices'       => array(
            '#apropos-section'  => __('Concept', 'voyagewp'),
            '#services-section' => __('Services', 'voyagewp'),
            '#team-section'     => __('Equipe', 'voyagewp'),
            '#form'             => __('Contact', 'voyagewp')
        )
    )));

    // Changement de l'image 
    $wp_customize -> add_setting('hero_bg', array(
        'default'       => get_template_directory_uri() . '/images/img-bg-2.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg', array(
        'label'         => __('Image de fond', 'voyagewp'),
        'section'       => 'hero',
        'settings'      => 'hero_bg'
    )));

    /***************************** CREATION DE LA SECTION A PROPOS ***************************/
    $wp_customize -> add_section('apropos', array(
        'title'         => __('Section A Propos', 'voyagewp'), // title => ('Titre' + 'textdomain')
        'description'   => sprintf(__('Ici les informations de la section à propos', 'voyagewp')), // sprintf() : retourne une variable
        'priority'      => 2
    ));

    // Changement du Titre A Propos
    $wp_customize -> add_setting('apropos_titre', array(
        'default'       => sprintf(__('Nous connaître', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('apropos_titre', array(
        'label'         => __('Ici, le titre de à propos', 'voyagewp'),
        'section'       => 'apropos'
    ));

    // Changement de l'image A Propos
    $wp_customize -> add_setting('apropos_bg', array(
        'default'       => get_template_directory_uri() . '/images/office.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'apropos_bg', array(
        'label'         => __('Image de fond', 'voyagewp'),
        'section'       => 'apropos',
        'settings'      => 'apropos_bg'
    )));

    // Changement du Texte A Propos
    $wp_customize -> add_setting('apropos_text', array(
        'default'       => sprintf(__('Lorem Ipsum', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('apropos_text', array(
        'label'         => __('Votre texte', 'voyagewp'),
        'type'          => 'textarea',
        'section'       => 'apropos'
    ));

    /******************************* CREATION DE LA SECTION SERVICES *****************************/
    $wp_customize -> add_section('services', array(
        'title'         => __('Section Services', 'voyagewp'), // title => ('Titre' + 'textdomain')
        'description'   => sprintf(__('Ici les informations de la section services', 'voyagewp')), // sprintf() : retourne une variable
        'priority'      => 3
    ));

    // Changement du Titre Services
    $wp_customize -> add_setting('services_titre', array(
        'default'       => sprintf(__('Nos services', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('services_titre', array(
        'label'         => __('Ici, le titre de services', 'voyagewp'),
        'section'       => 'services'
    ));

    // Changement du Item 1
    $wp_customize -> add_setting('item-1-service', array(
        'default'       => sprintf(__('fas fa-graduation-cap', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('item-1-service', array(
        'label'         => __('Code FontAwesome Item 1', 'voyagewp'),
        'section'       => 'services'
    ));

    // Changement du Service 1
    $wp_customize -> add_setting('services1_text', array(
        'default'       => sprintf(__('Lorem Ipsum', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('services1_text', array(
        'label'         => __('Votre texte Item 1', 'voyagewp'),
        'type'          => 'textarea',
        'section'       => 'services'
    ));

    // Changement du Item 2
    $wp_customize -> add_setting('item-2-service', array(
        'default'       => sprintf(__('fas fa-chart-line', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('item-2-service', array(
        'label'         => __('Code FontAwesome Item 2', 'voyagewp'),
        'section'       => 'services'
    ));

    // Changement du Service 2
    $wp_customize -> add_setting('services2_text', array(
        'default'       => sprintf(__('Lorem Ipsum', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('services2_text', array(
        'label'         => __('Votre texte Item 2', 'voyagewp'),
        'type'          => 'textarea',
        'section'       => 'services'
    ));

    // Changement du Item 3
    $wp_customize -> add_setting('item-3-service', array(
        'default'       => sprintf(__('fas fa-gem', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('item-3-service', array(
        'label'         => __('Code FontAwesome Item 3', 'voyagewp'),
        'section'       => 'services'
    ));

    // Changement du Service 3
    $wp_customize -> add_setting('services3_text', array(
        'default'       => sprintf(__('Lorem Ipsum', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('services3_text', array(
        'label'         => __('Votre texte Item 3', 'voyagewp'),
        'type'          => 'textarea',
        'section'       => 'services'
    ));

    /********** HIDE CONTENT SERVICES SECTION ************/

    $wp_customize-> add_setting('services-disable', array(
        'default'   => '',
    ));

    $wp_customize-> add_control('services-disable', array(
        'type'      => 'checkbox',
        'label'     => esc_html__('Cacher cette section', 'voyagewp'),
        'section'   => 'services'
    ));


    /***************************** CREATION DE LA SECTION EQUIPE ******************************/
    $wp_customize -> add_section('team', array(
        'title'         => __('Section Equipe', 'voyagewp'), // title => ('Titre' + 'textdomain')
        'description'   => sprintf(__('Ici les informations de la section Equipe', 'voyagewp')), // sprintf() : retourne une variable
        'priority'      => 4
    ));

    // Changement du Titre Services
    $wp_customize -> add_setting('team_titre', array(
        'default'       => sprintf(__('Notre Equipe', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team_titre', array(
        'label'         => __('Ici, le titre de Equipe', 'voyagewp'),
        'section'       => 'team'
    ));

    // Changement de Team 1 Picture
    $wp_customize -> add_setting('team-1-picture', array(
        'default'       => get_template_directory_uri() . '/images/team1.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'team-1-picture', array(
        'label'         => __('Team 1 Photo', 'voyagewp'),
        'section'       => 'team',
        'settings'      => 'team-1-picture'
    )));

    // Changement du Team 1 NOM
    $wp_customize -> add_setting('team-1-name', array(
        'default'       => sprintf(__('JOHN DOE', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team-1-name', array(
        'label'         => __('Nom Team 1', 'voyagewp'),
        'section'       => 'team'
    ));

    // Changement du Team 1 JOB
    $wp_customize -> add_setting('team-1-job', array(
        'default'       => sprintf(__('FOUNDER & CEO', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team-1-job', array(
        'label'         => __('Job Team 1', 'voyagewp'),
        'section'       => 'team'
    ));

    // Changement de Team 2 Picture
    $wp_customize -> add_setting('team-2-picture', array(
        'default'       => get_template_directory_uri() . '/images/team2.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'team-2-picture', array(
        'label'         => __('Team 2 Photo', 'voyagewp'),
        'section'       => 'team',
        'settings'      => 'team-2-picture'
    )));

    // Changement du Team 2 NOM
    $wp_customize -> add_setting('team-2-name', array(
        'default'       => sprintf(__('VICTORIA STEPHENS', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team-2-name', array(
        'label'         => __('Nom Team 2', 'voyagewp'),
        'section'       => 'team'
    ));

    // Changement du Team 2 JOB
    $wp_customize -> add_setting('team-2-job', array(
        'default'       => sprintf(__('FOUNDER', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team-2-job', array(
        'label'         => __('Job Team 2', 'voyagewp'),
        'section'       => 'team'
    ));

    // Changement de Team 3 Picture
    $wp_customize -> add_setting('team-3-picture', array(
        'default'       => get_template_directory_uri() . '/images/team3.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'team-3-picture', array(
        'label'         => __('Team 3 Photo', 'voyagewp'),
        'section'       => 'team',
        'settings'      => 'team-3-picture'
    )));

    // Changement du Team 3 NOM
    $wp_customize -> add_setting('team-3-name', array(
        'default'       => sprintf(__('SEAN WEAVER', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team-3-name', array(
        'label'         => __('Nom Team 3', 'voyagewp'),
        'section'       => 'team'
    ));

    // Changement du Team 3 JOB
    $wp_customize -> add_setting('team-3-job', array(
        'default'       => sprintf(__('DIRECTOR OF PRODUCTION', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('team-3-job', array(
        'label'         => __('Job Team 3', 'voyagewp'),
        'section'       => 'team'
    ));

    /***************************** CREATION DE LA SECTION RESEAUX SOCIAUX ******************************/
    $wp_customize -> add_section('social-network', array(
        'title'         => __('Section Réseau Sociaux', 'voyagewp'), // title => ('Titre' + 'textdomain')
        'description'   => sprintf(__('Ici les informations de la section Réseaux Sociaux', 'voyagewp')), // sprintf() : retourne une variable
        'priority'      => 5
    ));

    // Changement du Réseau Social 1
    $wp_customize -> add_setting('social-network-1', array(
        'default'       => sprintf(__('http://facebook.fr', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('social-network-1', array(
        'label'         => __('Lien du réseau Social 1', 'voyagewp'),
        'section'       => 'social-network'
    ));

    // Changement du Item Réseau Social 1
    $wp_customize -> add_setting('item-1-social', array(
        'default'       => sprintf(__('fab fa-facebook-square', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('item-1-social', array(
        'label'         => __('Code FontAwesome Social 1', 'voyagewp'),
        'section'       => 'social-network'
    ));

    // Changement du Réseau Social 2
    $wp_customize -> add_setting('social-network-2', array(
        'default'       => sprintf(__('http://twitter.fr', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('social-network-2', array(
        'label'         => __('Lien du réseau Social 2', 'voyagewp'),
        'section'       => 'social-network'
    ));

    // Changement du Item Réseau Social 2
    $wp_customize -> add_setting('item-2-social', array(
        'default'       => sprintf(__('fab fa-twitter-square', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('item-2-social', array(
        'label'         => __('Code FontAwesome Social 2', 'voyagewp'),
        'section'       => 'social-network'
    ));
    
    // Changement du Réseau Social 3
    $wp_customize -> add_setting('social-network-3', array(
        'default'       => sprintf(__('http://instagram.fr', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('social-network-3', array(
        'label'         => __('Lien du réseau Social 3', 'voyagewp'),
        'section'       => 'social-network'
    ));

    // Changement du Item Réseau Social 3
    $wp_customize -> add_setting('item-3-social', array(
        'default'       => sprintf(__('fab fa-instagram', 'voyagewp')), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('item-3-social', array(
        'label'         => __('Code FontAwesome Social 3', 'voyagewp'),
        'section'       => 'social-network'
    ));

    /***************************** CREATION DE LA SECTION COULEUR ******************************/
    $wp_customize -> add_section('color', array(
        'title'         => __('Section Couleur', 'voyagewp'), // title => ('Titre' + 'textdomain')
        'description'   => sprintf(__('Vous pouvez changer la couleur de votre thème', 'voyagewp')), // sprintf() : retourne une variable
        'priority'      => 6
    ));

    // Changement du Lien Bouton 
    $wp_customize -> add_setting('color-theme', array(
        'default'       =>  __('Light', 'voyagewp'), 
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'color-theme', array(
        'label'         => __('Couleur de votre thème', 'voyagewp'),
        'section'       => 'color',
        'type'          => 'select',    // permet d'ajouter des choix
        'choices'       => array(
            'light' => 'Light',
            'Dark'  => 'Dark'
        )
    )));
}

/* Ajouter la fonction créée à customizer_register */
add_action('customize_register', 'voyages_customizer_options');

