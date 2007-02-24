<?php
/**
 * Table Definition for orders_products_download
 */
require_once 'DB/DataObject.php';

class DataObjects_Orders_products_download extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'orders_products_download';        // table name
    public $orders_products_download_id;     // int(11)  not_null primary_key auto_increment
    public $orders_id;                       // int(11)  not_null
    public $orders_products_id;              // int(11)  not_null
    public $orders_products_filename;        // string(255)  not_null
    public $download_maxdays;                // int(2)  not_null
    public $download_count;                  // int(2)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Orders_products_download',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
