<?php
/**
 * Table Definition for geo_zones
 */
require_once 'DB/DataObject.php';

class DataObjects_Geo_zones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'geo_zones';                       // table name
    public $geo_zone_id;                     // int(11)  not_null primary_key auto_increment
    public $geo_zone_name;                   // string(32)  not_null
    public $geo_zone_description;            // string(255)  not_null
    public $last_modified;                   // datetime(19)  binary
    public $date_added;                      // datetime(19)  not_null binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Geo_zones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
