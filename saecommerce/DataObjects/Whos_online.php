<?php
/**
 * Table Definition for whos_online
 */
require_once 'DB/DataObject.php';

class DataObjects_Whos_online extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'whos_online';                     // table name
    public $customer_id;                     // int(11)  
    public $full_name;                       // string(64)  not_null
    public $session_id;                      // string(128)  not_null
    public $ip_address;                      // string(15)  not_null
    public $time_entry;                      // string(14)  not_null
    public $time_last_click;                 // string(14)  not_null
    public $last_page_url;                   // string(255)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Whos_online',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
