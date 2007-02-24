<?php
/**
 * Table Definition for orders_status
 */
require_once 'DB/DataObject.php';

class DataObjects_Orders_status extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'orders_status';                   // table name
    public $orders_status_id;                // int(11)  not_null primary_key
    public $language_id;                     // int(11)  not_null primary_key
    public $orders_status_name;              // string(32)  not_null multiple_key

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Orders_status',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
