<?php
/**
 * Table Definition for zones_to_geo_zones
 */
require_once 'DB/DataObject.php';

class DataObjects_Zones_to_geo_zones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'zones_to_geo_zones';              // table name
    public $association_id;                  // int(11)  not_null primary_key auto_increment
    public $zone_country_id;                 // int(11)  not_null
    public $zone_id;                         // int(11)  
    public $geo_zone_id;                     // int(11)  
    public $last_modified;                   // datetime(19)  binary
    public $date_added;                      // datetime(19)  not_null binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Zones_to_geo_zones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
