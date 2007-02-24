<?php
/**
 * Table Definition for customers_basket_attributes
 */
require_once 'DB/DataObject.php';

class DataObjects_Customers_basket_attributes extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'customers_basket_attributes';     // table name
    public $customers_basket_attributes_id;    // int(11)  not_null primary_key auto_increment
    public $customers_id;                    // int(11)  not_null
    public $products_id;                     // blob(255)  not_null blob
    public $products_options_id;             // int(11)  not_null
    public $products_options_value_id;       // int(11)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Customers_basket_attributes',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
