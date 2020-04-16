<?php

// Load Stylesheets
function load_css()
{
    wp_register_style('mdbscs', get_template_directory_uri() . '/css/bootstrap-material-design.css', array(), false, 'all');
    wp_enqueue_style('mdbscs');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

// Load Javascript
add_action('wp_enqueue_scripts', 'load_css');

function load_js() {

    wp_enqueue_script('jquery');

    wp_register_script('mdbscss', get_template_directory_uri() . '/js/bootstrap-material-design.js', 'jquery', false, true);

    wp_enqueue_script('mdbscss');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',

    )

);