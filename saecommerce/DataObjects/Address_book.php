<?php
/**
 * Table Definition for address_book
 */
require_once 'DB/DataObject.php';

class DataObjects_Address_book extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'address_book';                    // table name
    public $address_book_id;                 // int(11)  not_null primary_key auto_increment
    public $customers_id;                    // int(11)  not_null multiple_key
    public $entry_gender;                    // string(1)  not_null
    public $entry_company;                   // string(32)  
    public $entry_firstname;                 // string(32)  not_null
    public $entry_lastname;                  // string(32)  not_null
    public $entry_street_address;            // string(64)  not_null
    public $entry_suburb;                    // string(32)  
    public $entry_postcode;                  // string(10)  not_null
    public $entry_city;                      // string(32)  not_null
    public $entry_state;                     // string(32)  
    public $entry_country_id;                // int(11)  not_null
    public $entry_zone_id;                   // int(11)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Address_book',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
