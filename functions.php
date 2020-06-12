<?php
/* FUNCIONES QUE QUEREMOS AÑADIR A WORDPRESS */

// * REGISTRAR MENÚS
function copisteria_menus()
{
    $location = array(
        'primary' => 'Menú principal Barra Superior',
        'footer' => 'Footer Principal Inferior',
        'social' => 'Menu Social footer',
        'legal' => 'Menu Legal footer'
    );
    register_nav_menus($location);
}

add_action('init', 'copisteria_menus');


// * THEME SUPPORT, AÑADIR FUNCIONALIDADES AL TEMA (título dinamico, logo, etc)
function copisteria_theme_support()
{
    // * Add dynamic title tag support
    add_theme_support('title-tag');
    // * CUSTOM LOGO SUPPORT
    add_theme_support('custom-logo');
    // * IMÁGENES THUMBNAIL PARA LOS POSTS
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'copisteria_theme_support');


// * REGISTRAR ESTILOS
function copisteria_register_styles()
{
    $version = wp_get_theme()->get('Version'); // obtener la versión del tema (en nuestro styles.css) para no tener que hardcodearla
    wp_enqueue_style('copisteria-font', 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap', array(), $version, 'all');
    wp_enqueue_style('copisteria-style', get_template_directory_uri() . '/css/main.min.css', array('copisteria-font'), $version, 'all');
}

add_action('wp_enqueue_scripts', 'copisteria_register_styles');


// * REGISTRAR SCRIPTS JS
function copisteria_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('copisteria-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    wp_enqueue_script('copisteria-lazy', get_template_directory_uri() . '/js/jquery.lazy.min.js', array('copisteria-jquery'), $version, true);
    wp_enqueue_script('copisteria-main', get_template_directory_uri() . '/js/main.js', array('copisteria-jquery', 'copisteria-lazy'), $version, true);
}

add_action('wp_enqueue_scripts', 'copisteria_register_scripts');

// * CLASES MENU
function add_li_class($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_li_class', 1, 3);


// Our custom post type function
function create_posttype()
{
    // * SERVICIOS
    register_post_type(
        'servicios',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Servicios'),
                'singular_name' => __('Servicios')
            ),
            'public' => false,
            'has_archive' => false,
            'rewrite' => array('slug' => 'servicios'),
            'show_ui' => true,  // you should be able to edit it in wp-admin
            'show_in_rest' => false,
            'exclude_from_search' => true,  // you should exclude it from search results
            'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
            'single' => false,
            'menu_icon' => 'dashicons-format-aside',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type(
        'productos_corona',
        array(
            'labels' => array(
                'name' => __('Productos Coronavirus'),
                'singular_name' => __('Producto Coronavirus')
            ),
            'public' => false,
            'has_archive' => false,
            'rewrite' => array('slug' => 'coronavirus'),
            'show_ui' => true,
            'show_in_rest' => false,
            'exclude_from_search' => true,
            'show_in_nav_menus' => false,
            'single' => false,
            'menu_icon' => 'dashicons-pressthis',
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

// * WIDGETS
function copisteria_widget_areas()
{
    register_sidebar(array(
        'name' => __('Descripcion footer'),
        'id' => 'footer-descripcion',
        'description' => __('The first footer widget area', ''),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}

add_action('widgets_init', 'copisteria_widget_areas');

// ! TEXTAREA PAGES
// function remove_textarea()
// {
//     remove_post_type_support('page', 'editor');
// }
// add_action('admin_init', 'remove_textarea');
