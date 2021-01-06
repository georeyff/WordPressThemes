<?php get_header(); ?>
<!-- Si on a un affichage précis pour l'accueil, il faut penser front-page car c'est elle qui est prioritaire sur index.php -->

<?php get_template_part('./template-parts/content', 'hero'); ?>

<?php get_template_part('./template-parts/content', 'apropos'); ?>

<?php get_template_part('./template-parts/content', 'services'); ?>

<?php get_template_part('./template-parts/content', 'team'); ?>

<?php get_template_part('./template-parts/content', 'form'); ?>

<?php get_footer(); ?>