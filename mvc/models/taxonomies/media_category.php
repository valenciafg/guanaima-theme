<?php
/**
 * Created by PhpStorm.
 * User: vvalencia
 * Date: 12/11/15
 * Time: 19:22
 */
if ( ! function_exists( 'media_category_taxonomy' ) ) {

// Register Custom Taxonomy: Location
    function media_category_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Media Categories', 'Taxonomy General Name', 'Media Category' ),
            'singular_name'              => _x( 'Media Category', 'Taxonomy Singular Name', 'Media Category' ),
            'menu_name'                  => __( 'Media Categories', 'Media Category' ),
            'all_items'                  => __( 'All Media Categories', 'Media Category' ),
            'parent_item'                => __( 'Media Category', 'Media Category' ),
            'parent_item_colon'          => __( 'Media Category:', 'Media Category' ),
            'new_item_name'              => __( 'New Media Category', 'Media Category' ),
            'add_new_item'               => __( 'Add New Media Category', 'Media Category' ),
            'edit_item'                  => __( 'Edit Media Category', 'Media Category' ),
            'update_item'                => __( 'Update Media Category', 'Media Category' ),
            'view_item'                  => __( 'View Media Category', 'Media Category' ),
            'separate_items_with_commas' => __( 'Separate Media Category with commas', 'Media Category' ),
            'add_or_remove_items'        => __( 'Add or remove Media Category', 'Media Category' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'Media Category' ),
            'popular_items'              => __( 'Popular Media Categories', 'Media Category' ),
            'search_items'               => __( 'Search Media Categories', 'Media Category' ),
            'not_found'                  => __( 'Media Category Not Found', 'Media Category' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'query_var'                  => 'media_category',
        );
        register_taxonomy( 'media_category', array( 'attachment' ), $args );

    }
    add_action( 'init', 'media_category_taxonomy', 0 );

}