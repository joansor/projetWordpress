<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


function load_css(){

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri().'/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

function load_js(){

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true);

    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');

//theme Option

add_theme_support('menus');

//Menus
register_nav_menus(



            array(
                    'top-menu'=> 'Top Menu Location',
                    'mobile-menu' =>'Mobile Menu Location',
                )
);