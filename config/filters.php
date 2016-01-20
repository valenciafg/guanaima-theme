<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 19/01/16
 * Time: 08:50 PM
 */

function attachment_search( $query ) {
    if ( $query->is_search && isset($_GET['post_type'])) {
        $type = $_GET['post_type'];
        if($type == 'attachment'){
            $query->set('post_type', array('post', 'attachment'));
            $query->set('post_status', array('publish', 'inherit'));
        }
    }

    return $query;
}

add_filter( 'pre_get_posts', 'attachment_search' );