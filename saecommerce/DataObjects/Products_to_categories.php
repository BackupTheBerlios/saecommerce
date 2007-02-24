<?php
/**
 * Table Definition for products_to_categories
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_to_categories extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_to_categories';          // table name
    public $products_id;                     // int(11)  not_null primary_key
    public $categories_id;                   // int(11)  not_null primary_key

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_to_categories',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
