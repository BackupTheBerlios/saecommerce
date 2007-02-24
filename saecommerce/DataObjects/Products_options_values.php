<?php
/**
 * Table Definition for products_options_values
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_options_values extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_options_values';         // table name
    public $products_options_values_id;      // int(11)  not_null primary_key
    public $language_id;                     // int(11)  not_null primary_key
    public $products_options_values_name;    // string(64)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_options_values',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
