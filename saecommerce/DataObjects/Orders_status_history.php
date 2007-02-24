<?php
/**
 * Table Definition for orders_status_history
 */
require_once 'DB/DataObject.php';

class DataObjects_Orders_status_history extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'orders_status_history';           // table name
    public $orders_status_history_id;        // int(11)  not_null primary_key auto_increment
    public $orders_id;                       // int(11)  not_null
    public $orders_status_id;                // int(5)  not_null
    public $date_added;                      // datetime(19)  not_null binary
    public $customer_notified;               // int(1)  
    public $comments;                        // blob(65535)  blob

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Orders_status_history',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
