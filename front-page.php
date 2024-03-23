<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner animated-section ">
            <img class = "bannerbackground" src= "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" alt="Bannière image">
            <video class="bannervideo" autoplay loop muted playsinline>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/Banner.mp4" type="video/mp4">
            </video>
            <img class="bannerlogo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story animated-section">
            <h2>
                <span class = "animationh1"> L'histoire </span>
            </h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
    <?php 
          get_template_part ( './templates-parts/cats' , 'slider' ); 
            ?>
            </article>
            <article id="place">
            <img class="place_big_cloud" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/big_cloud.png" alt="Grand nuage qui bouge">
                <img class="place_little_cloud" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/little_cloud.png" alt="Petit nuage qui bouge">
                <div>
                    <h3>
                        <span class = "animationh1" >Le Lieu</span>
                        </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section class="animated-section" id="studio">
            <h2 class="taille2">
                <span class = "animationh1 fix2"> Studio Koukaki</span>
                </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

            <section id="Oscar" class="Oscar animated-section ">
            <div class="Oscar_title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Oscar_Background.png" alt="Fond orange">
            <h3 class="nomination-oscar-title">Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <img class="Oscar_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Oscar.png" alt="Fond orange">
        </section>


    </main><!-- #main -->

<?php
get_footer();
