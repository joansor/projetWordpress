<?php



// Ajouter automatiquement le titre du site dans l'en-tête du site
//add_theme_support( 'title-tag' );


function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);

    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

//theme Option

add_theme_support('menus');
// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(



    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

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

//ajout d'un l'option background
add_theme_support('custom-background');
// ajout option logo
add_theme_support('custom-logo');
