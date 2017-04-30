<?php
/*
    Include Scripts
*/
function halphen_script_enqueue() {

    // CSS
    wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/halphen.css', array(), '1.0.0', 'all' );

    // JS
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/halphen.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'halphen_script_enqueue' );

/*
    Activate Menus
*/
function halphen_theme_setup() {

    // Adds menus button under Appearance section on Wordpress admin.
    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action( 'init', 'halphen_theme_setup' );

// This doesn't need to be part of a function because it is inside of the functions.php file. Same case for the 'menus' inside of halphen_theme_setup.
add_theme_support( 'custom-background' );
// Enables Custom header under appearance
add_theme_support( 'custom-header' );
// Enables Featured Image on posts
add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
?>
