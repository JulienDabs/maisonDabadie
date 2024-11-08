<?php

 function load_css()
 {
     // Register Bootstrap CSS
     wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
     wp_enqueue_style('bootstrap');


     // Register Custom CSS
     wp_register_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), false, 'all'); // Corrected the path to style.css
     wp_enqueue_style('mainCSS');

    
     wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null);

     wp_enqueue_style('google-fonts');

     echo '<link rel="icon" href="' . get_template_directory_uri() . '/images/favicon.ico" type="image/x-icon" />';
    }


 add_action('wp_enqueue_scripts', 'load_css');

 // Correct usage
function my_custom_footer_function() {
    // Your code here
}
add_action('wp_footer', 'my_custom_footer_function');
 




 function load_js() 
 {
     wp_deregister_script('jquery');

     wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '1.0', true);
     wp_enqueue_script('jquery');

     wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js', array('jquery'), 1.0, true);
     wp_enqueue_script('popper');

     // Register and Enqueue Bootstrap JS
     wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js', array('jquery', 'popper'), '1.0', true);
     wp_enqueue_script('bootstrap');

     // Register and Enqueue Other Custom JS Files

      // HTML5 Shiv (Load in the header)
      wp_register_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array('jquery', 'popper'), '1.0', true);
      wp_enqueue_script('html5shiv');

     // Pointer Events Polyfill (Load in the footer)
      wp_register_script('pointer-events', get_template_directory_uri() . '/js/pointer-events.min.js', array('jquery', 'popper'), '1.0', true);
      wp_enqueue_script('pointer-events');

     // Core Script (Load in the footer)
     wp_register_script('core-script', get_template_directory_uri() . '/js/core.min.js', array('jquery', 'popper'), '1.0', true);
     wp_enqueue_script('core-script');

     // Custom Script (Load in the footer)
     wp_register_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery', 'popper'), '1.0', false);
     wp_enqueue_script('custom-script');
     }


 add_action('wp_enqueue_scripts', 'load_js');


 // Register Main Menu
 function register_my_menus() 
 {
     register_nav_menus(
         array(
             'header-menu' => __( 'Header Menu' ),
         )
     );
 }
 add_action( 'init', 'register_my_menus' );

// Register Custom Post Type for Prestations
 function create_prestation_post_type()
 {
     register_post_type('prestation',
         array(
             'labels' => array(
                 'name' => __('Prestations'),
                 'singular_name' => __('Prestation')
             ),
             'public' => true,
             'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
             'rewrite' => array('slug' => 'prestations'),
         )
     );
 }
 add_action('init', 'create_prestation_post_type');

 function create_prestations_post_type() 
 {
     $labels = array(
         'name'               => 'Prestations',
         'singular_name'      => 'Prestation',
         'menu_name'          => 'Prestations',
         'name_admin_bar'     => 'Prestation',
         'add_new'            => 'Add New',
         'add_new_item'       => 'Add New Prestation',
         'new_item'           => 'New Prestation',
         'edit_item'          => 'Edit Prestation',
         'view_item'          => 'View Prestation',
         'all_items'          => 'All Prestations',
         'search_items'       => 'Search Prestations',
         'not_found'          => 'No Prestations Found',
         'not_found_in_trash' => 'No Prestations Found in Trash'
     );

     $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'prestations' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'hierarchical'       => false,
         'menu_position'      => 5,
         'menu_icon'          => 'dashicons-buddicons-replies',
         'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
         'taxonomies'         => array( 'category' ), // Enable categories
         'show_in_rest'       => true,
     );

     register_post_type( 'prestations', $args );
 }
 add_action( 'init', 'create_prestations_post_type' );




?>


