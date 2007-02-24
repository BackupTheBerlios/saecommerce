<?php
/**
 * Table Definition for zones
 */
require_once 'DB/DataObject.php';

class DataObjects_Zones extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'zones';                           // table name
    public $zone_id;                         // int(11)  not_null primary_key auto_increment
    public $zone_country_id;                 // int(11)  not_null
    public $zone_code;                       // string(32)  not_null
    public $zone_name;                       // string(32)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Zones',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
