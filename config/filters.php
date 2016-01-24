<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/01/16
 * Time: 08:50 PM
 */
function media_search_template($template){
    global $wp_query;
    $post_type = get_query_var('post_type');
    if( $wp_query->is_search && isset($_GET['s']) && $post_type == 'attachment' ) {
        return locate_template('templates/searches/content-media.php');
    }
    return $template;
}
add_filter('template_include', 'media_search_template');