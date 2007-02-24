<?php
/**
 * Table Definition for products_attributes_download
 */
require_once 'DB/DataObject.php';

class DataObjects_Products_attributes_download extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'products_attributes_download';    // table name
    public $products_attributes_id;          // int(11)  not_null primary_key
    public $products_attributes_filename;    // string(255)  not_null
    public $products_attributes_maxdays;     // int(2)  
    public $products_attributes_maxcount;    // int(2)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Products_attributes_download',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
