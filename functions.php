<?php
// load styles
function load_stylesheets()
{
    wp_register_style('main', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('main');

    // wp_register_style('child', get_template_directory_uri() . '/css/child.css', array(), 1, 'all');
    // wp_enqueue_style('child');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js()
{
    // wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), 1, 1);
    // wp_enqueue_script('smooth-scroll');

    // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array(), 1, 1);
    // wp_enqueue_script('jquery');

    // wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1);
    // wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');
?>

