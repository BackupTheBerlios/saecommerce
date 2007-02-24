<?php
/**
 * Table Definition for newsletters
 */
require_once 'DB/DataObject.php';

class DataObjects_Newsletters extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'newsletters';                     // table name
    public $newsletters_id;                  // int(11)  not_null primary_key auto_increment
    public $title;                           // string(255)  not_null
    public $content;                         // blob(65535)  not_null blob
    public $module;                          // string(255)  not_null
    public $date_added;                      // datetime(19)  not_null binary
    public $date_sent;                       // datetime(19)  binary
    public $status;                          // int(1)  
    public $locked;                          // int(1)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Newsletters',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
