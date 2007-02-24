<?php
/**
 * Table Definition for manufacturers
 */
require_once 'DB/DataObject.php';

class DataObjects_Manufacturers extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'manufacturers';                   // table name
    public $manufacturers_id;                // int(11)  not_null primary_key auto_increment
    public $manufacturers_name;              // string(32)  not_null multiple_key
    public $manufacturers_image;             // string(64)  
    public $date_added;                      // datetime(19)  binary
    public $last_modified;                   // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Manufacturers',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
