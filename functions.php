<?php

function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('font-awesome');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js(){
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', 1, true);
    wp_enqueue_script('bootstrap_js');
}
add_action('wp_enqueue_scripts', 'load_js');