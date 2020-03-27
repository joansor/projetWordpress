<?php
// ajout du css et bootstrap
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

// ajout du jquery bootstrap
function load_js()
{

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

//theme Option

add_theme_support('menu');
// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
//ajouter des widgets
add_theme_support('widgets');
//ajout d'un l'option background
add_theme_support('custom-background');
// ajout option logo
add_theme_support('custom-logo');

// //Menus

//menu
function montheme_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'montheme_supports');

//permet d'ajouter une class a ma navbar
 function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}
//permet d'ajouter une class a mon <a> de ma nav
function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');


//custom image sizes
add_image_size('blog-large', 800, 600, false);
add_image_size('blog-small', 300, 200, true);

//register Sidebars
function my_sidebars()
{

    register_sidebar(

        array(

            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )

    );


    register_sidebar(

        array(

            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )

    );
}
add_action('widgets_init', 'my_sidebars');


function my_first_post_type()
{

    $args = array(

        'labels' => array(

            'name' => 'Cars',
            'singular_name' => 'Car',

        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        //'rewrite'=> array('slug'=> 'cars'),

    );

    register_post_type('cars', $args);
}

add_action('init', 'my_first_post_type');





function my_first_taxonomy()
{
    $args = array(

        'labels' => array(

            'name' => 'Brands',
            'singular_name' => 'Brands',

        ),

        'public' => true,
        'hierarchical' => true,

    );



    register_taxonomy('Brands', array('cars'), $args);
}

add_action('init', 'my_first_taxonomy');



