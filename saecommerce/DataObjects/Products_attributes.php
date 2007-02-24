<?php
/**
 * Table Definition for products_attributes
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_attributes extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_attributes';             // table name
    public $products_attributes_id;          // int(11)  not_null primary_key auto_increment
    public $products_id;                     // int(11)  not_null
    public $options_id;                      // int(11)  not_null
    public $options_values_id;               // int(11)  not_null
    public $options_values_price;            // unknown(17)  not_null
    public $price_prefix;                    // string(1)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_attributes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
