<?php
/*
Title: Tourism Office information
Post Type: place
Order: 1
Priority: default
Collapse: false
*/

/*
 *  Contact Information
 *  Fields:
 *      - Contact Name
 *      - Job Title
 *      - Phone
 *      - Mobile
 *      - Email
 */
piklist('field', array(
    'type'         => 'group',
    'field'        => 'tourist_office_group',
    'label'        => 'Tourism Office',
    'fields'       => array(
        array(
            'type'         => 'text',
            'field'        => 'address1',
            'label'        => 'Address Line 1',
            'columns'      => 12,
            'attributes'   => array('placeholder' => 'Street address, P.O. box, company name, c/o')
        ),
        array(
            'type'         => 'text',
            'field'        => 'address2',
            'label'        => 'Address Line 2',
            'columns'      => 12,
            'attributes'   => array('placeholder' => 'Apartment, suite, unit, building, floor, etc.')
        ),
        array(
            'type'         => 'text',
            'field'        => 'zip',
            'label'        => 'Zip Code',
            'columns'      => 4,
            'attributes'   => array('placeholder' => 'xx xx')
        ),
        array(
            'type'         => 'text',
            'field'        => 'phone',
            'label'        => 'Phone Number',
            'required'     => false,
            'columns'      => 4,
            'attributes'   => array('placeholder' => '+41 xx xxx xx xx')
        ),
        array(
            'type'         => 'text',
            'field'        => 'fax',
            'label'        => 'Fax',
            'columns'      => 4,
            'attributes'   => array('placeholder' => '+41 xx xxx xx xx')
        ),
        array(
            'type'         => 'text',
            'field'        => 'email',
            'label'        => 'Email',
            'columns'      => 6,
            'attributes'   => array('placeholder' => 'mail@office.com')
        ),
        array(
            'type' => 'text',
            'field' => 'website',
            'label' => 'Website',
            'columns' => 6,
            'attributes' => array('placeholder' => 'Example: www.tourismoffice.com')
        ),
    )
));

/*
 *  Contact Information
 *  Fields:
 *      - Contact Name
 *      - Job Title
 *      - Phone
 *      - Mobile
 *      - Email
 */
piklist('field', array(
    'type'      => 'group',
    'field'     => 'contact_info',
    'label'     => 'Contact Information',
    'add_more'  => true,
    'fields'    => array(
        array(
            'type'      => 'text',
            'field'     => 'contact_name',
            'label'     => 'Contact Name',
            'columns'   => 6,
            'attributes'   => array('placeholder' => 'Steve Jobs')
        ),
        array(
            'type'      => 'text',
            'field'     => 'job_title',
            'label'     => 'Job Title',
            'columns'   => 6,
            'attributes'   => array('placeholder' => 'CEO')
        ),
        array(
            'type'         => 'text',
            'field'        => 'phone_contact',
            'label'        => 'Phone',
            'columns'      => 4,
            'attributes'   => array('placeholder' => '+xx xx xxx xx xx')
        ),
        array(
            'type'         => 'text',
            'field'        => 'mobile_contact',
            'label'        => 'Mobile',
            'columns'      => 4,
            'attributes'   => array('placeholder' => '+xx xx xxx xx xx')
        ),
        array(
            'type'         => 'text',
            'field'        => 'email_contact',
            'label'        => 'Email',
            'columns'      => 4,
            'attributes'   => array('placeholder' => 'info@website.com')
        )
    )
));

/*
 *  Social Media Indo
 *  Fields:
 *      - Social Media URL
 *      - Social Media Type
 */
piklist('field', array(
    'type'      => 'group',
    'field'     => 'social_media_info',
    'label'     => 'Social Media Information',
    'add_more'  => true,
    'fields'    => array(
        array(
            'type'      => 'text',
            'field'     => 'social_url',
            'label'     => 'Social Media URL',
            'columns'   => 6
        ),
        array(
            'type'         => 'select',
            'field'        => 'social_type',
            'value'        => '1',
            'label'        => 'Social Type',
            'columns'      => 6,
            'choices'      => array(
                '1' => 'Facebook',
                '2' => 'Twitter',
                '3' => 'Instagram',
                '4' => 'YouTube',
                '5' => 'Pinterest',
                '6' => 'Vimeo',
                '7' => 'Google+'
            )
        )
    )
));

/*
 *  Photo Gallery
 *  Fields:
 *      - Uploaded Photos
 *      - Altitude
 */
piklist('field', array(
    'type'      => 'file',
    'field'     => 'upload_photos',
    'label'     => 'Photo Gallery',
    'options'   => array(
        'modal_title' => 'Photo Gallery',
        'button' => 'Add Photo(s)',
    )
));

/*
 *  Geographic Coordinates
 *  Fields:
 *      - Longitude
 *      - Altitude
 */
piklist('field', array(
    'type'      => 'group',
    'field'     => 'geographic_coordinates',
    'label'     => 'Geographic Coordinates',
    'help'      => 'The coordinates are often chosen such that one of the numbers represents vertical position, and two or three of the numbers represent horizontal position. ',
    'fields'    => array(
        array(
            'type'         => 'text',
            'field'        => 'longitude',
            'label'        => 'Longitude',
            'columns'      => 6
        ),
        array(
            'type'         => 'text',
            'field'        => 'latitude',
            'label'        => 'Latitude',
            'columns'      => 6
        )
    )
));

?>