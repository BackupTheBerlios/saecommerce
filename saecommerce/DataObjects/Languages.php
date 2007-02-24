<?php
/**
 * Table Definition for languages
 */
require_once 'DB/DataObject.php';

class DataObjects_Languages extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'languages';                       // table name
    public $languages_id;                    // int(11)  not_null primary_key auto_increment
    public $name;                            // string(32)  not_null multiple_key
    public $code;                            // string(2)  not_null
    public $image;                           // string(64)  
    public $directory;                       // string(32)  
    public $sort_order;                      // int(3)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Languages',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
