<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 08-04-2016
 * Time: 07:21 AM
 */
/*class Attachment{
    private $type = 'attachment';
    function __construct(){
        add_action( 'rest_api_init', array( $this, 'register_attachment_meta_fields') );
    }

    public function register_attachment_meta_fields(){
        register_api_field( $this->type,
            'tourist_office_group',
            array(
                'get_callback'    => array( $this,'get_attachment_meta_field'),
                'update_callback' => array( $this,'update_attachment_meta_field'),
                'schema'          => null,
            )
        );
    }
    function get_attachment_meta_field( $object, $field_name, $request ) {
        return get_post_meta( $object[ 'id' ], $field_name );
    }
    function update_attachment_meta_field( $value, $object, $field_name ) {
        if ( ! $value || ! is_string( $value ) ) {
            return;
        }
        return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
    }
}*/