<?php
/**
 * Table Definition for manufacturers_info
 */
require_once 'DB/DataObject.php';

class DataObjects_Manufacturers_info extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'manufacturers_info';              // table name
    public $manufacturers_id;                // int(11)  not_null primary_key
    public $languages_id;                    // int(11)  not_null primary_key
    public $manufacturers_url;               // string(255)  not_null
    public $url_clicked;                     // int(5)  not_null
    public $date_last_click;                 // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Manufacturers_info',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
