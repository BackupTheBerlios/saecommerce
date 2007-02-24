<?php
/**
 * Table Definition for orders_total
 */
require_once 'DB/DataObject.php';

class DataObjects_Orders_total extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'orders_total';                    // table name
    public $orders_total_id;                 // int(10)  not_null primary_key unsigned auto_increment
    public $orders_id;                       // int(11)  not_null multiple_key
    public $title;                           // string(255)  not_null
    public $text;                            // string(255)  not_null
    public $value;                           // unknown(17)  not_null
    public $class;                           // string(32)  not_null
    public $sort_order;                      // int(11)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Orders_total',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
