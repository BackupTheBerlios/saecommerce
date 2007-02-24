<?php
/**
 * Table Definition for products_description
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_description extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_description';            // table name
    public $products_id;                     // int(11)  not_null primary_key auto_increment
    public $language_id;                     // int(11)  not_null primary_key
    public $products_name;                   // string(64)  not_null multiple_key
    public $products_description;            // blob(65535)  blob
    public $products_url;                    // string(255)  
    public $products_viewed;                 // int(5)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_description',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
