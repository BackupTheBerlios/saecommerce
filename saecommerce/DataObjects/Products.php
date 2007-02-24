<?php
/**
 * Table Definition for products
 */
require_once 'DB/DataObject.php';

class DataObjects_Products extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products';                        // table name
    public $products_id;                     // int(11)  not_null primary_key auto_increment
    public $products_quantity;               // int(4)  not_null
    public $products_model;                  // string(12)  
    public $products_image;                  // string(64)  
    public $products_price;                  // unknown(17)  not_null
    public $products_date_added;             // datetime(19)  not_null multiple_key binary
    public $products_last_modified;          // datetime(19)  binary
    public $products_date_available;         // datetime(19)  binary
    public $products_weight;                 // unknown(7)  not_null
    public $products_status;                 // int(1)  not_null
    public $products_tax_class_id;           // int(11)  not_null
    public $manufacturers_id;                // int(11)  
    public $products_ordered;                // int(11)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
