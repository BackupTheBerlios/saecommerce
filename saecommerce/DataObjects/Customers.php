<?php
/**
 * Table Definition for customers
 */
require_once 'DB/DataObject.php';

class DataObjects_Customers extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'customers';                       // table name
    public $customers_id;                    // int(11)  not_null primary_key auto_increment
    public $customers_gender;                // string(1)  not_null
    public $customers_firstname;             // string(32)  not_null
    public $customers_lastname;              // string(32)  not_null
    public $customers_dob;                   // datetime(19)  not_null binary
    public $customers_email_address;         // string(96)  not_null
    public $customers_default_address_id;    // int(11)  
    public $customers_telephone;             // string(32)  not_null
    public $customers_fax;                   // string(32)  
    public $customers_password;              // string(40)  not_null
    public $customers_newsletter;            // string(1)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Customers',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
