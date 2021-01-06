
<section id="team-section">
    <h2><?php echo get_theme_mod('team_titre', 'Notre Equipe'); ?></h2>
    <div id="team">
        <div class="team_item">
            <img src="<?php echo get_theme_mod('team-1-picture', get_template_directory_uri(). '/images/team1.jpg'); ?>" alt="team1"/>
            <h4><?php echo get_theme_mod('team-1-name', 'JOHN DOE'); ?></h4>
            <h5><?php echo get_theme_mod('team-1-job', 'FOUNDER & CEO'); ?></h5>
        </div><!-- Referme services_item -->

        <div class="team_item">
            <img src="<?php echo get_theme_mod('team-2-picture', get_template_directory_uri(). '/images/team2.jpg'); ?>">
            <h4><?php echo get_theme_mod('team-2-name', 'VICTORIA STEPHENS'); ?></h4>
            <h5><?php echo get_theme_mod('team-2-job', 'FOUNDER'); ?></h5>
        </div><!-- Referme services_item -->

        <div class="team_item">
            <img src="<?php echo get_theme_mod('team-3-picture', get_template_directory_uri(). '/images/team3.jpg'); ?>">
            <h4><?php echo get_theme_mod('team-3-name', 'SEAN WEAVER'); ?></h4>
            <h5><?php echo get_theme_mod('team-3-job', 'DIRECTOR OF PRODUCTION'); ?></h5>
        </div><!-- Referme services_item -->
    </div>
    
</section><!--Ici, on referme la section services-->