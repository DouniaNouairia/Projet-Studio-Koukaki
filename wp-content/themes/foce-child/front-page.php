<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner entrance">
        <!-- video background -->
        <div class="video-container">
            <video class="background-video" autoplay loop muted>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video-1.mp4'; ?>" type="video/mp4">
                <img src="wp-content/themes/foce-child/assets/fallback-image.png" alt="Image de secours" class="fallback-image">
            </video>
        </div>
        <div class="container-img entrance">
            <img class="sticky floating-image" src=" <?php echo get_stylesheet_directory_uri() . '/assets/Image-logo-banner.png'; ?> " alt=" logo Fleurs d'oranger & chats errants">
        </div>
    </section>

    <section id="story" class="story entrance">
        <h2> <span class="titreAnimation">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters" class="entrance">
            <div class="main-character">
                <h3>
                    <span class="titreAnimation">Les personnages<span>
                </h3>
                <!-- **swipper** -->
                <?php get_template_part('template/personnages'); ?>
            </div>
        </article>
        <article id="place" class="entrance">
            <div>
                <h3>
                    <span class="titreAnimation">Le Lieu</span>
                </h3>
                <p><?php echo get_theme_mod('place'); ?></p>
                <!-- *****Nuage***** -->
                <img class="bigCloud" src="<?php echo get_theme_file_uri() . '/assets/big_cloud.png'; ?>" alt="grand nuage">
                <img class="littleCloud" src="<?php echo get_theme_file_uri() . '/assets/little_cloud.png'; ?>" alt="petit nuage">

            </div>

        </article>

        </article>
    </section>


    <section id="studio" class="entrance">
        <h2><span class="titreAnimation">Studio Koukaki<span>

        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

</main><!-- #main -->


<?php
get_footer();
