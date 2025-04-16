<?php
/**
 * Theme Functions
 * 
 * This file contains all the core functionality for the Konzeptebau theme
 */

/**
 * Admin Bar Settings
 */
function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

/**
 * Theme Setup & Support
 */
function wpb_theme_setup(){
    // Enable featured images
    add_theme_support('post-thumbnails');
    // Enable excerpts on pages
    add_post_type_support( 'page', 'excerpt' );
}
add_action('after_setup_theme','wpb_theme_setup');

/**
 * Navigation Menu Registration
 */
function register_my_menus() {
    // Register navigation menu locations
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );

    // Add theme support for post formats
    add_theme_support('post-formats', array('aside','gallery'));
}
add_action( 'init', 'register_my_menus' );

/**
 * Excerpt Settings
 */
function set_excerpt_length(){
    return 35;
}
add_filter('excerpt_length', 'set_excerpt_length');

/**
 * Widget Areas
 */
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

/**
 * Services Custom Post Type
 */
function konzeptebau_services_post_type() {
    $labels = array(
        'name'                  => _x('Services', 'Post Type General Name', 'konzeptebau'),
        'singular_name'         => _x('Service', 'Post Type Singular Name', 'konzeptebau'),
        'menu_name'            => __('Services', 'konzeptebau'),
        'name_admin_bar'       => __('Service', 'konzeptebau'),
        'archives'             => __('Service Archives', 'konzeptebau'),
        'attributes'           => __('Service Attributes', 'konzeptebau'),
        'parent_item_colon'    => __('Parent Service:', 'konzeptebau'),
        'all_items'            => __('All Services', 'konzeptebau'),
        'add_new_item'         => __('Add New Service', 'konzeptebau'),
        'add_new'              => __('Add New', 'konzeptebau'),
        'new_item'             => __('New Service', 'konzeptebau'),
        'edit_item'            => __('Edit Service', 'konzeptebau'),
        'update_item'          => __('Update Service', 'konzeptebau'),
        'view_item'            => __('View Service', 'konzeptebau'),
        'view_items'           => __('View Services', 'konzeptebau'),
        'search_items'         => __('Search Service', 'konzeptebau'),
        'not_found'            => __('Not found', 'konzeptebau'),
        'not_found_in_trash'   => __('Not found in Trash', 'konzeptebau'),
        'featured_image'       => __('Featured Image', 'konzeptebau'),
        'set_featured_image'   => __('Set featured image', 'konzeptebau'),
        'remove_featured_image' => __('Remove featured image', 'konzeptebau'),
        'use_featured_image'   => __('Use as featured image', 'konzeptebau'),
        'insert_into_item'     => __('Insert into service', 'konzeptebau'),
        'uploaded_to_this_item' => __('Uploaded to this service', 'konzeptebau'),
        'items_list'           => __('Services list', 'konzeptebau'),
        'items_list_navigation' => __('Services list navigation', 'konzeptebau'),
        'filter_items_list'    => __('Filter services list', 'konzeptebau'),
    );

    $args = array(
        'label'                 => __('Service', 'konzeptebau'),
        'description'           => __('Services offered by the company', 'konzeptebau'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'            => array('service_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-hammer',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'services'),
    );

    register_post_type('services', $args);
}
add_action('init', 'konzeptebau_services_post_type', 0);

/**
 * Service Category Taxonomy
 */
function konzeptebau_service_category_taxonomy() {
    $labels = array(
        'name'                       => _x('Service Categories', 'Taxonomy General Name', 'konzeptebau'),
        'singular_name'              => _x('Service Category', 'Taxonomy Singular Name', 'konzeptebau'),
        'menu_name'                  => __('Categories', 'konzeptebau'),
        'all_items'                  => __('All Categories', 'konzeptebau'),
        'parent_item'                => __('Parent Category', 'konzeptebau'),
        'parent_item_colon'          => __('Parent Category:', 'konzeptebau'),
        'new_item_name'              => __('New Category Name', 'konzeptebau'),
        'add_new_item'               => __('Add New Category', 'konzeptebau'),
        'edit_item'                  => __('Edit Category', 'konzeptebau'),
        'update_item'                => __('Update Category', 'konzeptebau'),
        'view_item'                  => __('View Category', 'konzeptebau'),
        'separate_items_with_commas' => __('Separate categories with commas', 'konzeptebau'),
        'add_or_remove_items'        => __('Add or remove categories', 'konzeptebau'),
        'choose_from_most_used'      => __('Choose from the most used', 'konzeptebau'),
        'popular_items'              => __('Popular Categories', 'konzeptebau'),
        'search_items'               => __('Search Categories', 'konzeptebau'),
        'not_found'                  => __('Not Found', 'konzeptebau'),
        'no_terms'                   => __('No categories', 'konzeptebau'),
        'items_list'                 => __('Categories list', 'konzeptebau'),
        'items_list_navigation'      => __('Categories list navigation', 'konzeptebau'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array('slug' => 'service-category'),
    );

    register_taxonomy('service_category', array('services'), $args);
}
add_action('init', 'konzeptebau_service_category_taxonomy', 0);

/**
 * References Custom Post Type
 */
function konzeptebau_references_post_type() {
    $labels = array(
        'name'                  => _x('References', 'Post Type General Name', 'konzeptebau'),
        'singular_name'         => _x('Reference', 'Post Type Singular Name', 'konzeptebau'),
        'menu_name'            => __('References', 'konzeptebau'),
        'name_admin_bar'       => __('Reference', 'konzeptebau'),
        'archives'             => __('Reference Archives', 'konzeptebau'),
        'attributes'           => __('Reference Attributes', 'konzeptebau'),
        'parent_item_colon'    => __('Parent Reference:', 'konzeptebau'),
        'all_items'            => __('All References', 'konzeptebau'),
        'add_new_item'         => __('Add New Reference', 'konzeptebau'),
        'add_new'              => __('Add New', 'konzeptebau'),
        'new_item'             => __('New Reference', 'konzeptebau'),
        'edit_item'            => __('Edit Reference', 'konzeptebau'),
        'update_item'          => __('Update Reference', 'konzeptebau'),
        'view_item'            => __('View Reference', 'konzeptebau'),
        'view_items'           => __('View References', 'konzeptebau'),
        'search_items'         => __('Search Reference', 'konzeptebau'),
        'not_found'            => __('Not found', 'konzeptebau'),
        'not_found_in_trash'   => __('Not found in Trash', 'konzeptebau'),
        'featured_image'       => __('Featured Image', 'konzeptebau'),
        'set_featured_image'   => __('Set featured image', 'konzeptebau'),
        'remove_featured_image' => __('Remove featured image', 'konzeptebau'),
        'use_featured_image'   => __('Use as featured image', 'konzeptebau'),
        'insert_into_item'     => __('Insert into reference', 'konzeptebau'),
        'uploaded_to_this_item' => __('Uploaded to this reference', 'konzeptebau'),
        'items_list'           => __('References list', 'konzeptebau'),
        'items_list_navigation' => __('References list navigation', 'konzeptebau'),
        'filter_items_list'    => __('Filter references list', 'konzeptebau'),
    );

    $args = array(
        'label'                 => __('Reference', 'konzeptebau'),
        'description'           => __('Project references and case studies', 'konzeptebau'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'            => array('reference_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-portfolio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'references'),
    );

    register_post_type('references', $args);
}
add_action('init', 'konzeptebau_references_post_type', 0);

/**
 * Reference Category Taxonomy
 */
function konzeptebau_reference_category_taxonomy() {
    $labels = array(
        'name'                       => _x('Reference Categories', 'Taxonomy General Name', 'konzeptebau'),
        'singular_name'              => _x('Reference Category', 'Taxonomy Singular Name', 'konzeptebau'),
        'menu_name'                  => __('Categories', 'konzeptebau'),
        'all_items'                  => __('All Categories', 'konzeptebau'),
        'parent_item'                => __('Parent Category', 'konzeptebau'),
        'parent_item_colon'          => __('Parent Category:', 'konzeptebau'),
        'new_item_name'              => __('New Category Name', 'konzeptebau'),
        'add_new_item'               => __('Add New Category', 'konzeptebau'),
        'edit_item'                  => __('Edit Category', 'konzeptebau'),
        'update_item'                => __('Update Category', 'konzeptebau'),
        'view_item'                  => __('View Category', 'konzeptebau'),
        'separate_items_with_commas' => __('Separate categories with commas', 'konzeptebau'),
        'add_or_remove_items'        => __('Add or remove categories', 'konzeptebau'),
        'choose_from_most_used'      => __('Choose from the most used', 'konzeptebau'),
        'popular_items'              => __('Popular Categories', 'konzeptebau'),
        'search_items'               => __('Search Categories', 'konzeptebau'),
        'not_found'                  => __('Not Found', 'konzeptebau'),
        'no_terms'                   => __('No categories', 'konzeptebau'),
        'items_list'                 => __('Categories list', 'konzeptebau'),
        'items_list_navigation'      => __('Categories list navigation', 'konzeptebau'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array('slug' => 'reference-category'),
    );

    register_taxonomy('reference_category', array('references'), $args);
}
add_action('init', 'konzeptebau_reference_category_taxonomy', 0);

/**
 * Asset Enqueuing
 */
function enqueue_tailwind_css() {
    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');

/** 
 * Enqueue JavaScript
 */
function enqueue_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/src/js/main.js',
        array(),
        filemtime(get_template_directory() . '/src/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/**
 * Activation Hooks
 */
function custom_services_rewrite_flush() {
    custom_services_post_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'custom_services_rewrite_flush' );

/**
 * Disable Gutenberg Editor
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Customizer File

require get_template_directory(). '/inc/customizer.php';

/**
 * Add Service Icon Meta Box
 */
function konzeptebau_add_service_icon_meta_box() {
    add_meta_box(
        'service_icon_meta_box', // Unique ID
        'Service Icon Settings', // Box title
        'konzeptebau_service_icon_meta_box_html', // Content callback, must be of type callable
        'services', // Post type
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'konzeptebau_add_service_icon_meta_box');

/**
 * Service Icon Meta Box HTML
 */
function konzeptebau_service_icon_meta_box_html($post) {
    $svg_icon = get_post_meta($post->ID, '_service_svg_icon', true);
    if (empty($svg_icon)) {
        $svg_icon = '<svg class="w-8 h-8 text-custom-orange" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 7l-5 5 5 5"/></svg>';
    }
    ?>
    <div class="service-icon-meta-box">
        <p class="description">Paste your SVG code here. Make sure it's valid SVG markup.</p>
        <textarea 
            name="service_svg_icon" 
            id="service_svg_icon" 
            rows="4" 
            style="width: 100%; margin-top: 10px;"
        ><?php echo esc_textarea($svg_icon); ?></textarea>
        <div class="icon-preview" style="margin-top: 10px;">
            <p><strong>Preview:</strong></p>
            <div style="padding: 10px; border: 1px solid #ddd; display: inline-block; margin-top: 5px;">
                <?php echo wp_kses($svg_icon, array(
                    'svg' => array(
                        'class' => true,
                        'viewbox' => true,
                        'fill' => true,
                        'stroke' => true,
                    ),
                    'path' => array(
                        'stroke-linecap' => true,
                        'stroke-linejoin' => true,
                        'stroke-width' => true,
                        'd' => true,
                    ),
                )); ?>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Save Service Icon Meta Box Data
 */
function konzeptebau_save_service_icon_meta_box($post_id) {
    if (array_key_exists('service_svg_icon', $_POST)) {
        update_post_meta(
            $post_id,
            '_service_svg_icon',
            wp_kses($_POST['service_svg_icon'], array(
                'svg' => array(
                    'class' => true,
                    'viewbox' => true,
                    'fill' => true,
                    'stroke' => true,
                ),
                'path' => array(
                    'stroke-linecap' => true,
                    'stroke-linejoin' => true,
                    'stroke-width' => true,
                    'd' => true,
                ),
            ))
        );
    }
}
add_action('save_post', 'konzeptebau_save_service_icon_meta_box');

// Add JavaScript for live preview
function konzeptebau_service_icon_admin_script() {
    $screen = get_current_screen();
    if ($screen->post_type === 'services') {
        ?>
        <script>
        jQuery(document).ready(function($) {
            var textarea = $('#service_svg_icon');
            var preview = $('.icon-preview div');
            
            textarea.on('input', function() {
                preview.html($(this).val());
            });
        });
        </script>
        <?php
    }
}
add_action('admin_footer', 'konzeptebau_service_icon_admin_script');

?>
