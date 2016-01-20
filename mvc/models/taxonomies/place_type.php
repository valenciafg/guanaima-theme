<?php
/*
 * Created by @valenciafg
 */
if ( ! function_exists( 'place_type_taxonomy' ) ) {

// Register Custom Taxonomy
function place_type_taxonomy() {

$labels = array(
'name'                       => _x( 'Place Types', 'Taxonomy General Name', 'Place Type' ),
'singular_name'              => _x( 'Place Type', 'Taxonomy Singular Name', 'Place Type' ),
'menu_name'                  => __( 'Place Types', 'Place Type' ),
'all_items'                  => __( 'All Place Types', 'Place Type' ),
'parent_item'                => __( 'Place Type', 'Place Type' ),
'parent_item_colon'          => __( 'Place Type:', 'Place Type' ),
'new_item_name'              => __( 'New Place Type', 'Place Type' ),
'add_new_item'               => __( 'Add New Place Type', 'Place Type' ),
'edit_item'                  => __( 'Edit Place Type', 'Place Type' ),
'update_item'                => __( 'Update Place Type', 'Place Type' ),
'view_item'                  => __( 'View Place Type', 'Place Type' ),
'separate_items_with_commas' => __( 'Separate place type with commas', 'Place Type' ),
'add_or_remove_items'        => __( 'Add or remove place type', 'Place Type' ),
'choose_from_most_used'      => __( 'Choose from the most used', 'Place Type' ),
'popular_items'              => __( 'Popular Place Types', 'Place Type' ),
'search_items'               => __( 'Search Place Types', 'Place Type' ),
'not_found'                  => __( 'Place Type Not Found', 'Place Type' ),
);
$args = array(
'labels'                     => $labels,
'hierarchical'               => true,
'public'                     => true,
'show_ui'                    => true,
'show_admin_column'          => true,
'show_in_nav_menus'          => true,
'show_tagcloud'              => true,
'query_var'                  => 'place_type',
);
register_taxonomy( 'place_type', array( 'place' ), $args );

}
add_action( 'init', 'place_type_taxonomy', 0 );

}