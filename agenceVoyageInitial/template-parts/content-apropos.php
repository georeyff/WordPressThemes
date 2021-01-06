
<section id="apropos-section">
        <h2><?php echo get_theme_mod('apropos_titre', 'A PROPOS'); ?></h2>
        <div id="apropos">
          <div id="apropos_image">

            <img src="<?php echo get_theme_mod('apropos_bg', get_template_directory_uri(). '/images/office.jpg'); ?>" alt="bureau"/>
   
           </div><!-- Referme apropos_image-->
            <div id="apropos_texte">
             <p>
                <?php echo get_theme_mod('apropos_text', 'Lorem Ipsum'); ?>
             </p>
           </div><!-- Referme apropos_texte -->
        </div>
</section><!--Ici, on referme la section apropos-->