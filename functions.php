<?php

function university_files(){
    wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('university_main_style', get_theme_file_uri('main.css'), NULL, microtime());
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css');
}

add_action('wp_enqueue_scripts', 'university_files');

function portfolio_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'portfolio_features');

?>