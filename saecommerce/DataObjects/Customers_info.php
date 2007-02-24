<?php
/**
 * Table Definition for customers_info
 */
require_once 'DB/DataObject.php';

class DataObjects_Customers_info extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'customers_info';                  // table name
    public $customers_info_id;               // int(11)  not_null primary_key
    public $customers_info_date_of_last_logon;    // datetime(19)  binary
    public $customers_info_number_of_logons;    // int(5)  
    public $customers_info_date_account_created;    // datetime(19)  binary
    public $customers_info_date_account_last_modified;    // datetime(19)  binary
    public $global_product_notifications;    // int(1)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Customers_info',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
