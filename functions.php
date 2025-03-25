<?php

// Hide Admin bar
function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

// Post Thumbnails

function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    add_post_type_support( 'page', 'excerpt' );
}

// Menu

function register_my_menus() {

    // Nav Menus
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );

    // Post Formats
    add_theme_support('post-formats', array('aside','gallery'));
  }

add_action( 'init', 'register_my_menus' );

// Excerpt length

add_action('after_setup_theme','wpb_theme_setup');

// Excerpt Length Control

function set_excerpt_length(){
    return 35;
}

add_filter('excerpt_length', 'set_excerpt_length');


    // Widget Locations

    function wpb_init_widgets($id){
      register_sidebar(array(
          'name' => 'Sidebar',
          'id' => 'sidebar',
          'before_widget' => '<div class="sidebar-module">',
          'after_widget' => '</div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>'
      ));

  }

  add_action('widgets_init','wpb_init_widgets');
