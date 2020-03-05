<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Document</title>

<?php wp_head()?>

<link href="style.css" rel="stylesheet">

</head>
<body <?php body_class(); ?>
    <?php wp_body_open(); ?>
>
    
<header>

<div class="container">
    <?php
    wp_nav_menu(


            array(
                        'theme_location'=> 'top-menu',
                        'menu_class'=> 'top-bar',
                 )

             );
        ?>
</div>
</header>