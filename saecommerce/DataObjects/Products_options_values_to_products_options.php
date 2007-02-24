<?php
/**
 * Table Definition for products_options_values_to_products_options
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_options_values_to_products_options extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_options_values_to_products_options';    // table name
    public $products_options_values_to_products_options_id;    // int(11)  not_null primary_key auto_increment
    public $products_options_id;             // int(11)  not_null
    public $products_options_values_id;      // int(11)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_options_values_to_products_options',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
