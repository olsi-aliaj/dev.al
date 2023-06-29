<?php

function deval_files(){
  // Font Awsome Icons CDN
  wp_enqueue_style('font-awsome', '//cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css');
  // Main CSS File
  wp_enqueue_style('deval_main_styles', get_stylesheet_uri());  
  // Google Fonts CDN
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap');  
  //Swiper js CDN
  wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
  wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
}

add_action('wp_enqueue_scripts', 'deval_files');

function deval_features() {
  // Adding Header Navbar and Footer
  register_nav_menu('headerMenuLocation', 'Header Menu');
  register_nav_menu('footerMenuLocation', 'Footer Menu');
}

add_action('after_setup_theme', 'deval_features');

function custom_theme_enqueue_styles() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_styles' );


// Register the hero block.
function register_hero_block() {
  if ( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type(
      array(
        'name'            => 'hero-block',
        'title'           => __( 'Hero Block', 'dev.al-theme' ),
        'description'     => __( 'A custom block for the hero section.', 'dev.al-theme' ),
        'render_callback' => 'render_hero_block',
        'category'        => 'common',
        'icon'            => 'admin-comments',
        'keywords'        => array( 'hero', 'section', 'dev.al-theme' ),
      )
    );
  }
}
add_action( 'acf/init', 'register_hero_block' );

// Register the features block.
function register_features_block() {
  if ( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type(
      array(
        'name' => 'features-block',
        'title' => 'Features Block',
        'category' => 'formatting',
        'render_callback' => 'render_features_block',
        'icon' => 'admin-comments',
        'keywords' => array('features', 'block'),
      )
    );
  }
}
add_action( 'acf/init', 'register_features_block' );

function register_custom_slider_post_type() {
  $labels = array(
      'name' => 'Destinations',
      'singular_name' => 'Destination',
      'menu_name' => 'Destinations',
  );

  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => false,
      'publicly_queryable' => false,
      'exclude_from_search' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'supports' => array('title', 'editor', 'thumbnail'),
  );

  register_post_type('destinations', $args);
}
add_action('init', 'register_custom_slider_post_type');

function register_booking_block() {
  if ( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type(
      array(
        'name'            => 'booking-block',
        'title'           => __( 'Booking Block', 'dev.al-theme' ),
        'description'     => __( 'A custom block for the booking section.', 'dev.al-theme' ),
        'render_callback' => 'render_booking_block',
        'category'        => 'common',
        'icon'            => 'admin-comments',
        'keywords'        => array( 'booking', 'section', 'dev.al-theme' ),
      )
    );
  }
}
add_action( 'acf/init', 'register_booking_block' );

function register_gallery_block() {
  if ( function_exists( 'acf_register_block_type' ) ) {
    acf_register_block_type(
      array(
        'name'            => 'gallery-block',
        'title'           => __( 'Gallery Block', 'dev.al-theme' ),
        'description'     => __( 'A custom block for the gallery section.', 'dev.al-theme' ),
        'render_callback' => 'render_gallery_block',
        'category'        => 'common',
        'icon'            => 'admin-comments',
        'keywords'        => array( 'gallery', 'section', 'dev.al-theme' ),
      )
    );
  }
}
add_action( 'acf/init', 'register_gallery_block' );

function create_calendar_post_type() {
  $labels = array(
      'name'               => 'Calendar Event',
      'singular_name'      => 'Calendar Event',
      'menu_name'          => 'Calendar Event',
      'name_admin_bar'     => 'Calendar Event',
      'add_new'            => 'Add New',
      'add_new_item'       => 'Add New Calendar Event',
      'new_item'           => 'New Calendar Event',
      'edit_item'          => 'Edit Calendar Event',
      'view_item'          => 'View Calendar Event',
      'all_items'          => 'All Calendar Events',
      'search_items'       => 'Search Calendar Events',
      'parent_item_colon'  => 'Parent Calendar Event:',
      'not_found'          => 'No Calendar Event found.',
      'not_found_in_trash' => 'No Calendar Event found in Trash.'
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'calendar_event' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'menu_icon'          => 'dashicons-calendar-alt',
      'supports'           => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type( 'calendar_event', $args );
}
add_action( 'init', 'create_calendar_post_type' );


?>