<!-- On place le bandeau dans la partie hero 
content-hero : on peut nommer 'hero' comme on veut mais 'content' est obligatoire -->

    <div id="bandeau">
        <div id="contenu">
            <div class="contenu-tagline">
                <h1>
                    <?php echo get_theme_mod('hero_titre', 'Agence'); ?>
                </h1>
            </div>
            <div class="contenu-cta">
                <a href="<?php echo get_theme_mod('hero_bouton_lien', '#apropos-section'); ?>">
                    <?php echo get_theme_mod('hero_bouton', 'Concept'); ?>
                </a>
            </div>

        </div><!--Ici, on referme la div contenu-->
    </div><!-- Ici, on referme la div bandeau-->
</section><!--Ici, on referme la balise section-->