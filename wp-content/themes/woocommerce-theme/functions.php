<?php

function load_stylesheets() {
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style( 'style');

    wp_register_style('app_style', get_template_directory_uri() . '/app.css', array(), 1, 'all');
    wp_enqueue_style( 'app_style');
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets');

function load_javascript() {
    wp_register_script( 'custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true );
    wp_enqueue_script( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'load_javascript' );

function gg_gfonts_prefetch() {
    echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
    echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>';
   }
add_action( 'wp_head', 'gg_gfonts_prefetch' );


function load_fonts() {
    wp_register_style( 'gfonts', 'https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;400;600;700&display=swap', array(), 1, 'all');
    wp_enqueue_style( 'gfonts' );
}
add_action( 'wp_enqueue_scripts', 'load_fonts');


add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( 
    array(
        'primary_menu' => __('Primary Menu', 'theme')
    )
);


add_image_size( 'post_image', 1100, 550, false );


register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'pade-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title'  => '</h4>',
    )
    );