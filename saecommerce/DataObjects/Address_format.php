<?php
/**
 * Table Definition for address_format
 */
require_once 'DB/DataObject.php';

class DataObjects_Address_format extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'address_format';                  // table name
    public $address_format_id;               // int(11)  not_null primary_key auto_increment
    public $address_format;                  // string(128)  not_null
    public $address_summary;                 // string(48)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Address_format',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
