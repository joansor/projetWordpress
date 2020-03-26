<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PromoBlog</title>

    <?php wp_head() ?>

    <link href="style.css" rel="stylesheet">

</head>

<body <?php body_class(); ?> <?php wp_body_open(); ?>>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" id="titre" href="#"><?php bloginfo("name") ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                    <?php wp_nav_menu(


                        array(
                            'theme_location' => 'header',
                            'container' => false,
                            'menu_class' => 'navbar-nav mr-auto',
                        )

                    );

                    ?>

                    <?php get_search_form(); ?>


               

            </div>

        </nav>


    </header>