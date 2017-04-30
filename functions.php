<?php

function halphen_script_enqueue() {

    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/halphen.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/halphen.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'halphen_script_enqueue' );

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
