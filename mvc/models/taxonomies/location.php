<?php
/*
 * Created by @valenciafg
 */
if ( ! function_exists( 'location_taxonomy' ) ) {

// Register Custom Taxonomy: Location
function location_taxonomy() {

$labels = array(
'name'                       => _x( 'Locations', 'Taxonomy General Name', 'Location' ),
'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'Location' ),
'menu_name'                  => __( 'Locations', 'Location' ),
'all_items'                  => __( 'All Locations', 'Location' ),
'parent_item'                => __( 'Location', 'Location' ),
'parent_item_colon'          => __( 'Location:', 'Location' ),
'new_item_name'              => __( 'New Location', 'Location' ),
'add_new_item'               => __( 'Add New Location', 'Location' ),
'edit_item'                  => __( 'Edit Location', 'Location' ),
'update_item'                => __( 'Update Location', 'Location' ),
'view_item'                  => __( 'View Location', 'Location' ),
'separate_items_with_commas' => __( 'Separate locations with commas', 'Location' ),
'add_or_remove_items'        => __( 'Add or remove location', 'Location' ),
'choose_from_most_used'      => __( 'Choose from the most used', 'Location' ),
'popular_items'              => __( 'Popular Locations', 'Location' ),
'search_items'               => __( 'Search Locations', 'Location' ),
'not_found'                  => __( 'Location Not Found', 'Location' ),
);
$args = array(
'labels'                     => $labels,
'hierarchical'               => true,
'public'                     => true,
'show_ui'                    => true,
'show_admin_column'          => true,
'show_in_nav_menus'          => true,
'show_in_rest'               => true, //IMPORTANT! you cant filter posts by this taxonomy like wp-json/wp/v2/media?filter[location]=<name>
'show_tagcloud'              => true,
'query_var'                  => 'location', //if you dont specific this value you can not filter out the previous format but this way
                                            //wp-json/wp/v2/posts/?filter[taxonomy]=location&filter[term]=<name>
);
register_taxonomy( 'location', array( 'place','attachment' ), $args );

}
add_action( 'init', 'location_taxonomy', 0 );

}