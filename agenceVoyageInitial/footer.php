
    <footer>
        <div class="social">
            <?php if(get_theme_mod('social-network-1', 'http://facebook.fr') != ''){?>
                <a href="<?php echo get_theme_mod('social-network-1', 'http://facebook.fr'); ?>" target="_blank">
                    <i class="<?php echo get_theme_mod('item-1-social', 'fab fa-facebook-square'); ?> fa-2x"></i>
                </a>
            <?php } ?>
        </div>
        <div class="social">
            <?php if(get_theme_mod('social-network-1', 'http://twitter.fr') != ''){?>
                <a href="<?php echo get_theme_mod('social-network-2', 'http://twitter.fr'); ?>" target="_blank">
                    <i class="<?php echo get_theme_mod('item-2-social', 'fab fa-twitter-square'); ?> fa-2x"></i>
                </a>
            <?php } ?>
        </div>
        <div class="social">
            <?php if(get_theme_mod('social-network-1', 'http://instagram.fr') != ''){?>
                <a href="<?php echo get_theme_mod('social-network-3', 'http://instagram.fr'); ?>" target="_blank">
                    <i class="<?php echo get_theme_mod('item-3-social', 'fab fa-instagram'); ?> fa-2x"></i>
                </a>
            <?php } ?>
        </div>
    </footer><!--Ici, on referme la balise footer-->


    <!-- <script src="js/script.js"></script> -->
    <?php wp_footer(); ?>  
    <!-- Permet l'affichage du menu Admin -->
    </body>

</html>
