<?php

/**
 * Created by PhpStorm.
 * User: vvalencia
 * Date: 1/10/15
 * Time: 19:08
 */
class PostTypes{
    var $pathtaxonomies = '../../models/taxonomies';
    var $pathposttypes = '../../models/post-types';
    var $posttypeincludes=['place'];
    var $taxonomiesincludes=['location','place_type'];
    function __construct() {
        foreach($this->posttypeincludes as $pt){
            require_once $this->pathposttypes.$pt.".php";
        }
        foreach($this->$taxonomiesincludes as $tx){
            require_once $this->$pathtaxonomies.$tx.".php";
        }
    }

}