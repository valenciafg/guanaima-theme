<?php
/*
Title: Attachments information
Order: 110
Priority: default
Context: normal
Locked: true
Collapse: false
*/

/*
 *  Location Data
 *  Fields:
 *      - Longitude
 *      - Altitude
 */

piklist('field', array(
    'type'      => 'group',
    'field'     => 'attached_info',
    'label'     => 'Attached Information',
    'fields'    => array(
        array(
            'type'         => 'text',
            'field'        => 'attached_source_url',
            'label'        => 'Source URL',
            'columns'      => 12
        ),
        array(
            'type'         => 'text',
            'field'        => 'attached_author',
            'label'        => 'Author',
            'columns'      => 6
        ),
        array(
            'type'         => 'text',
            'field'        => 'attached_author_url',
            'label'        => 'Author URL/Website',
            'columns'      => 6
        ),
        array(
            'type'         => 'text',
            'field'        => 'attached_device',
            'label'        => 'device',
            'columns'      => 12
        )
    )
));

piklist('field', array(
    'type'      => 'group',
    'field'     => 'attached_location_data',
    'label'     => 'Location',
    'help'      => 'The coordinates are often chosen such that one of the numbers represents vertical position, and two or three of the numbers represent horizontal position. ',
    'fields'    => array(
        array(
            'type'         => 'text',
            'field'        => 'attached_longitude',
            'label'        => 'Longitude',
            'columns'      => 6
        ),
        array(
            'type'         => 'text',
            'field'        => 'attached_latitude',
            'label'        => 'Latitude',
            'columns'      => 6
        )
    )
));