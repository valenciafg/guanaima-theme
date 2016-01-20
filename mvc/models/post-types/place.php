<?php
/*
 * Created by @valenciafg
 */
// Register Custom Post Type: Place
function place_post_type() {

$labels = array(
    'name'                => _x( 'Places', 'Post Type General Name', 'Place' ),
    'singular_name'       => _x( 'Place', 'Post Type Singular Name', 'Place' ),
    'menu_name'           => __( 'Place', 'Place' ),
    'name_admin_bar'      => __( 'Place', 'Place' ),
    'parent_item_colon'   => __( 'Parent Place:', 'Place' ),
    'all_items'           => __( 'All Places', 'Place' ),
    'add_new_item'        => __( 'Add New Place', 'Place' ),
    'add_new'             => __( 'Add New Place', 'Place' ),
    'new_item'            => __( 'New Place', 'Place' ),
    'edit_item'           => __( 'Edit Place', 'Place' ),
    'update_item'         => __( 'Update Place', 'Place' ),
    'view_item'           => __( 'View Place', 'Place' ),
    'search_items'        => __( 'Search Place', 'Place' ),
    'not_found'           => __( 'Place Not found', 'Place' ),
    'not_found_in_trash'  => __( 'Place Not found in Trash', 'Place' ),
);
$args = array(
    'label'               => __( 'Place', 'Place' ),
    'description'         => __( 'Place Description', 'Place' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail'),
    'taxonomies'          => array( 'location', 'place_type' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-site',
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => true,
    'show_in_rest' => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'place',
    'capability_type'     => 'page',
);
register_post_type( 'place', $args );

}
add_action( 'init', 'place_post_type', 0 );

?>