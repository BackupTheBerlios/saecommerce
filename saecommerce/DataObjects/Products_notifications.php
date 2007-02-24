<?php
/**
 * Table Definition for products_notifications
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_notifications extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_notifications';          // table name
    public $products_id;                     // int(11)  not_null primary_key
    public $customers_id;                    // int(11)  not_null primary_key
    public $date_added;                      // datetime(19)  not_null binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_notifications',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
