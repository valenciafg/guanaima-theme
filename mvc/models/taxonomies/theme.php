<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/01/16
 * Time: 09:25 PM
 */
if ( ! function_exists( 'theme_taxonomy' ) ) {

// Register Custom Taxonomy: Theme
    function theme_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Theme', 'Taxonomy General Name', 'Theme' ),
            'singular_name'              => _x( 'Theme', 'Taxonomy Singular Name', 'Theme' ),
            'menu_name'                  => __( 'Themes', 'Theme' ),
            'all_items'                  => __( 'All Themes', 'Theme' ),
            'parent_item'                => __( 'Theme', 'Theme' ),
            'parent_item_colon'          => __( 'Theme:', 'Theme' ),
            'new_item_name'              => __( 'New Theme', 'Theme' ),
            'add_new_item'               => __( 'Add New Theme', 'Theme' ),
            'edit_item'                  => __( 'Edit Theme', 'Theme' ),
            'update_item'                => __( 'Update Theme', 'Theme' ),
            'view_item'                  => __( 'View Theme', 'Theme' ),
            'separate_items_with_commas' => __( 'Separate Themes with commas', 'Theme' ),
            'add_or_remove_items'        => __( 'Add or remove Theme', 'Theme' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'Theme' ),
            'popular_items'              => __( 'Popular Themes', 'Theme' ),
            'search_items'               => __( 'Search Themes', 'Theme' ),
            'not_found'                  => __( 'Theme Not Found', 'Theme' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'query_var'                  => 'theme',
        );
        register_taxonomy( 'theme', array( 'place' ), $args );

    }
    add_action( 'init', 'theme_taxonomy', 0 );

}