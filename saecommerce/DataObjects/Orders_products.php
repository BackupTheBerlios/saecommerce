<?php
/**
 * Table Definition for orders_products
 */
require_once 'DB/DataObject.php';

class DataObjects_Orders_products extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'orders_products';                 // table name
    public $orders_products_id;              // int(11)  not_null primary_key auto_increment
    public $orders_id;                       // int(11)  not_null
    public $products_id;                     // int(11)  not_null
    public $products_model;                  // string(12)  
    public $products_name;                   // string(64)  not_null
    public $products_price;                  // unknown(17)  not_null
    public $final_price;                     // unknown(17)  not_null
    public $products_tax;                    // unknown(9)  not_null
    public $products_quantity;               // int(2)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Orders_products',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
