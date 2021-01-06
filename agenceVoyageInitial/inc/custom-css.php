<?php

// Le titre de ce fichier n'est pas réglementé 
// Dès lors que l'on crée un nouveau fichier, il faut le linker dans le fichier functions

function customizer_css(){
    /* On stocke dans une variable pour plus de lisibilité, ici on récupère la valeur de l'image */
    $showcase_background = get_theme_mod('hero_bg', get_template_directory_uri(). '/images/bg.jpg');
    /* Ici on vient placer le champs pour cacher la section */
    $hide_section = get_theme_mod('services-disable') == 1 ? true : false;
    /* Ici on vient placer le changement de couleur du thème */
    $change_color = get_theme_mod('color-theme', 'dark');
?>

<style>
#hero {
  background: url('<?php echo esc_html($showcase_background); ?>');
  background-repeat: no-repeat;
  background-size: cover;
  height: 600px;
  position: relative;
}

#services-section {
  <?php if($hide_section){?>
      display: none
  <?php } ?>
}

/* PRESET */

<?php if($change_color == 'light') : ?>
nav{
  background-color: rgba(255, 255, 255, 0.5);
  color : black;
  text-align: center;
  padding: 20px;
  display: flex;
  justify-content: space-between;
}
body{
  background-color : rgba(0,0,0,0.5); 
}
<?php endif; ?>

<?php if($change_color == 'dark') : ?>
  nav{
    background-color: black;
    color : white;
    text-align: center;
    padding: 20px;
    display: flex;
    justify-content: space-between;
  }
  body{
    background-color : black; 
  }
<?php endif; ?>


</style>


<?php
}
add_action('wp_head', 'customizer_css');


