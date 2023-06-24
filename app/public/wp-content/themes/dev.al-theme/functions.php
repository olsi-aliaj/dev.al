<?php

function deval_files(){
  wp_enqueue_style('font-awsome', '//cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css');
  wp_enqueue_style('deval_main_styles', get_stylesheet_uri());  
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap');  
}

add_action('wp_enqueue_scripts', 'deval_files');

function deval_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu');
  register_nav_menu('footerMenuLocation', 'Footer Menu');
}

add_action('after_setup_theme', 'deval_features');

?>