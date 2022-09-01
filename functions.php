<?php
function register_my_menu()
{
    register_nav_menu('main', "Menu principal");
}
add_action('after_setup_theme', 'register_my_menu');




function register_my_sidebars()
{
    register_sidebar(
        array(
            'name' => "Sidebar principale",
            'id' => 'main-sidebar',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'

        )
    );

    register_sidebar(
        array(
            'name' => "Sidebar du footer",
            'id' => 'footer-sidebar',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
}
add_action('widgets_init', 'register_my_sidebars');

/**
* Enqueue scripts and styles
*/
function your_theme_enqueue_scripts() {
// all styles

wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), 20141119 );
wp_enqueue_style( 'templatemo', get_stylesheet_directory_uri() . '/css/slick.css', array(), 20141119 );
// all scripts
wp_enqueue_style( 'templatemo-css', get_stylesheet_directory_uri() . '/css/templatemo-style.css', array(), 20141119 );

// all scripts

wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array('jquery'), null, true );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), null, true );
wp_enqueue_script( 'templatemo-script', get_template_directory_uri() . '/js/templatemo-script.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_enqueue_scripts' );



add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
/**
 * Register and load font awesome CSS files using a CDN.
 */
function prefix_enqueue_awesome() {
    wp_enqueue_style( 
        'font-awesome-5', 
        'https://use.fontawesome.com/releases/v5.3.0/css/all.css', 
        array(), 
        '5.3.0' 
    );
}