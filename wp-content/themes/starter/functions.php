<?php 

function theme_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all' );
    
    // Enqueue custom theme CSS (styles.css)
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/styles.css', array('bootstrap-css'), '1.0', 'all' );

    // Enqueue Bootstrap JS (Bundle)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '5.2.3', true );

    // Enqueue custom JS (scripts.js)
    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/scripts.js', array('bootstrap-js'), '1.0', true );

    // Enqueue custom JS (scripts.js)
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'), '1.0', true );

        // Enqueue custom theme CSS (styles.css)
        wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/vendor.css', array('bootstrap-css'), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function register_case_studies_post_type() {

    $labels = array(
        'name'               => 'Case Studies',
        'singular_name'      => 'Case Study',
        'menu_name'          => 'Case Studies',
        'name_admin_bar'     => 'Case Study',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Case Study',
        'new_item'           => 'New Case Study',
        'edit_item'          => 'Edit Case Study',
        'view_item'          => 'View Case Study',
        'all_items'          => 'All Case Studies',
        'search_items'       => 'Search Case Studies',
        'parent_item_colon'  => 'Parent Case Studies:',
        'not_found'          => 'No case studies found.',
        'not_found_in_trash' => 'No case studies found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'case-studies'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type('case_studies', $args);
}

add_action('init', 'register_case_studies_post_type');



function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
