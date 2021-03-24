<?php

function understrap_enqueue_scripts() {
    wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/css/animate.min.css');
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'understrap_enqueue_scripts');