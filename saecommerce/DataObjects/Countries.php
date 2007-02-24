<?php
/**
 * Table Definition for countries
 */
require_once 'DB/DataObject.php';

class DataObjects_Countries extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'countries';                       // table name
    public $countries_id;                    // int(11)  not_null primary_key auto_increment
    public $countries_name;                  // string(64)  not_null multiple_key
    public $countries_iso_code_2;            // string(2)  not_null
    public $countries_iso_code_3;            // string(3)  not_null
    public $address_format_id;               // int(11)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Countries',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
