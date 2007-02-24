<?php
/**
 * Table Definition for categories
 */
require_once 'DB/DataObject.php';

class DataObjects_Categories extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'categories';                      // table name
    public $categories_id;                   // int(11)  not_null primary_key auto_increment
    public $categories_image;                // string(64)  
    public $parent_id;                       // int(11)  not_null multiple_key
    public $sort_order;                      // int(3)  
    public $date_added;                      // datetime(19)  binary
    public $last_modified;                   // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Categories',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
