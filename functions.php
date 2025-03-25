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


// Register Custom Post Type: Services
function custom_services_post_type() {
    $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'menu_name'          => 'Services',
        'name_admin_bar'     => 'Service',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Service',
        'new_item'           => 'New Service',
        'edit_item'          => 'Edit Service',
        'view_item'          => 'View Service',
        'all_items'          => 'All Services',
        'search_items'       => 'Search Services',
        'not_found'          => 'No services found.',
        'not_found_in_trash' => 'No services found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-hammer', // Change icon if needed
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true, // Enable Gutenberg support
    );

    register_post_type( 'services', $args );
}
add_action( 'init', 'custom_services_post_type' );

// Add Custom Meta Box for Service Price & Duration
function custom_service_meta_box() {
    add_meta_box(
        'service_details',
        'Service Details',
        'service_meta_box_callback',
        'services',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'custom_service_meta_box' );

// Meta Box Callback Function (Displays Fields)
function service_meta_box_callback( $post ) {
    // Retrieve saved values
    $service_price = get_post_meta( $post->ID, 'service_price', true );
    $service_duration = get_post_meta( $post->ID, 'service_duration', true );

    ?>
    <p>
        <label for="service_price">Service Price ($):</label>
        <input type="text" id="service_price" name="service_price" value="<?php echo esc_attr( $service_price ); ?>" style="width:100%;">
    </p>
    <p>
        <label for="service_duration">Duration (Hours):</label>
        <input type="text" id="service_duration" name="service_duration" value="<?php echo esc_attr( $service_duration ); ?>" style="width:100%;">
    </p>
    <?php
}

// Save Meta Box Data
function save_service_meta( $post_id ) {
    // Prevent auto-saving
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // Check and save Service Price
    if ( isset( $_POST['service_price'] ) ) {
        update_post_meta( $post_id, 'service_price', sanitize_text_field( $_POST['service_price'] ) );
    }

    // Check and save Service Duration
    if ( isset( $_POST['service_duration'] ) ) {
        update_post_meta( $post_id, 'service_duration', sanitize_text_field( $_POST['service_duration'] ) );
    }
}
add_action( 'save_post', 'save_service_meta' );

// Flush Permalinks on Activation (Important!)
function custom_services_rewrite_flush() {
    custom_services_post_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'custom_services_rewrite_flush' );


add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
?>
