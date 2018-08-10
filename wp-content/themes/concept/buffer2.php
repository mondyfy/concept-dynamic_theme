<?php

function staff_cpt() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Staffs', 'Post Type General Name', 'concept' ),
        'singular_name'       => _x( 'Staff', 'Post Type Singular Name', 'concept' ),
        'menu_name'           => __( 'Staffs', 'concept' ),
        'parent_item_colon'   => __( 'Parent Staff', 'concept' ),
        'all_items'           => __( 'All Staffs', 'concept' ),
        'view_item'           => __( 'View Staff', 'concept' ),
        'add_new_item'        => __( 'Add New Staff', 'concept' ),
        'add_new'             => __( 'Add New', 'concept' ),
        'edit_item'           => __( 'Edit Staff', 'concept' ),
        'update_item'         => __( 'Update Staff', 'concept' ),
        'search_items'        => __( 'Search Staff', 'concept' ),
        'not_found'           => __( 'Not Found', 'concept' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'concept' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'staffs', 'concept' ),
        'description'         => __( 'Staff news and reviews', 'concept' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'staffs', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'staff_cpt', 0 );
