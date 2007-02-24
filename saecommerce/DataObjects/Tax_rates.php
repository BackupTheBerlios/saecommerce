<?php
/**
 * Table Definition for tax_rates
 */
require_once 'DB/DataObject.php';

class DataObjects_Tax_rates extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'tax_rates';                       // table name
    public $tax_rates_id;                    // int(11)  not_null primary_key auto_increment
    public $tax_zone_id;                     // int(11)  not_null
    public $tax_class_id;                    // int(11)  not_null
    public $tax_priority;                    // int(5)  
    public $tax_rate;                        // unknown(9)  not_null
    public $tax_description;                 // string(255)  not_null
    public $last_modified;                   // datetime(19)  binary
    public $date_added;                      // datetime(19)  not_null binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Tax_rates',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
