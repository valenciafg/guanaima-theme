<?php
/**
 * Created by PhpStorm.
 * User: vvalencia
 * Date: 7/10/15
 * Time: 19:39
 * Using: REST API Plugin v2.0-beta4
 */

class Place_API{ //extends WP_REST_Controller{
    private $type = 'place';
    function __construct(){
        //add_filter( 'rest_api_init', array( $this, 'register_place_routes' ));
        add_action( 'rest_api_init', array( $this, 'register_place_meta_fields') );
    }

    function register_place_meta_fields() {
        register_api_field( $this->type,
            'tourist_office_group',
            array(
                'get_callback'    => array( $this,'get_place_meta_field'),
                'update_callback' => array( $this,'update_place_meta_field'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'contact_info',
            array(
                'get_callback'    => array( $this,'get_place_meta_field'),
                'update_callback' => array( $this,'update_place_meta_field'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'social_media_info',
            array(
                'get_callback'    => array( $this,'get_place_meta_field'),
                'update_callback' => array( $this,'update_place_meta_field'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'geographic_coordinates',
            array(
                'get_callback'    => array( $this,'get_place_meta_field'),
                'update_callback' => array( $this,'update_place_meta_field'),
                'schema'          => null,
            )
        );
        register_api_field( $this->type,
            'geographic_coordinates',
            array(
                'get_callback'    => array( $this,'get_place_meta_field'),
                'update_callback' => array( $this,'update_place_meta_field'),
                'schema'          => null,
            )
        );
    }

    function get_place_meta_field( $object, $field_name, $request ) {
        return get_post_meta( $object[ 'id' ], $field_name );
    }

    function update_place_meta_field( $value, $object, $field_name ) {
        if ( ! $value || ! is_string( $value ) ) {
            return;
        }
        return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
    }

    /*
    function get_tourist_office_group( $object, $field_name, $request ) {
        return get_post_meta( $object[ 'id' ], $field_name );
    }

    function update_tourist_office_group( $value, $object, $field_name ) {
        if ( ! $value || ! is_string( $value ) ) {
            return;
        }
        return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
    }

    function get_tourist_contact_info( $object, $field_name, $request ) {
        return get_post_meta( $object[ 'id' ], $field_name );
    }
    */

    /* New Routes - currently unused */
    /*public function register_place_routes() {
        $version = '2';
        $namespace = 'api/v' . $version;
        $base = 'place';
        register_rest_route( $namespace, '/' . $base, array(
            array(
                'methods'         => WP_REST_Server::READABLE,
                'callback'        => array( $this, 'get_posts' ),
                //'permission_callback' => array( $this, 'get_items_permissions_check' ),
                'args'            => array(

                ),
            )
        ) );
        register_rest_route( $namespace, '/' . $base.'/(?P<id>\d+)', array(
            array(
                'methods'         => 'GET',
                'callback'        => array( $this, 'get_post' ),
                'args' => array(
                    'id' => array(
                        'required' => true,
                    ),
                ),
            ),
        ) );
    }

    public function get_posts(){
        $args=array(
            'post_type'         => $this->type,
            'post_status'       => 'publish',
            'posts_per_page'    => -1,
            'caller_get_posts'  => 1,
            'order'             => 'ASC',
        );
        $posts = get_posts( $args );
        $result = array();
        foreach ( $posts as $post ) {
            $result[] = array(
                'ID'        => $post->ID,
                'title'     => $post->post_title,
                'content'   => $post->post_content,
                'status'    => $post->post_status,
                'date'      => $post->post_date,
                'modified_date'      => $post->post_modified,

            );
        }
        $data['posts'] = $result;
        return $data;

    }
    public function get_post($data){
        $args = array(
            'p' => $data['id'], // id of a page, post, or custom type
            'post_type' => $this->type);
        $post = new WP_Query($args);
        return $post;
    }
    */
}
?>