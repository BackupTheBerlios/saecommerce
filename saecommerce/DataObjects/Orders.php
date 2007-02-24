<?php
/**
 * Table Definition for orders
 */
require_once 'DB/DataObject.php';

class DataObjects_Orders extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'orders';                          // table name
    public $orders_id;                       // int(11)  not_null primary_key auto_increment
    public $customers_id;                    // int(11)  not_null
    public $customers_name;                  // string(64)  not_null
    public $customers_company;               // string(32)  
    public $customers_street_address;        // string(64)  not_null
    public $customers_suburb;                // string(32)  
    public $customers_city;                  // string(32)  not_null
    public $customers_postcode;              // string(10)  not_null
    public $customers_state;                 // string(32)  
    public $customers_country;               // string(32)  not_null
    public $customers_telephone;             // string(32)  not_null
    public $customers_email_address;         // string(96)  not_null
    public $customers_address_format_id;     // int(5)  not_null
    public $delivery_name;                   // string(64)  not_null
    public $delivery_company;                // string(32)  
    public $delivery_street_address;         // string(64)  not_null
    public $delivery_suburb;                 // string(32)  
    public $delivery_city;                   // string(32)  not_null
    public $delivery_postcode;               // string(10)  not_null
    public $delivery_state;                  // string(32)  
    public $delivery_country;                // string(32)  not_null
    public $delivery_address_format_id;      // int(5)  not_null
    public $billing_name;                    // string(64)  not_null
    public $billing_company;                 // string(32)  
    public $billing_street_address;          // string(64)  not_null
    public $billing_suburb;                  // string(32)  
    public $billing_city;                    // string(32)  not_null
    public $billing_postcode;                // string(10)  not_null
    public $billing_state;                   // string(32)  
    public $billing_country;                 // string(32)  not_null
    public $billing_address_format_id;       // int(5)  not_null
    public $payment_method;                  // string(32)  not_null
    public $cc_type;                         // string(20)  
    public $cc_owner;                        // string(64)  
    public $cc_number;                       // string(32)  
    public $cc_expires;                      // string(4)  
    public $last_modified;                   // datetime(19)  binary
    public $date_purchased;                  // datetime(19)  binary
    public $orders_status;                   // int(5)  not_null
    public $orders_date_finished;            // datetime(19)  binary
    public $currency;                        // string(3)  
    public $currency_value;                  // unknown(16)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Orders',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
