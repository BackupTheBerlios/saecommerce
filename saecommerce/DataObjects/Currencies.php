<?php
/**
 * Table Definition for currencies
 */
require_once 'DB/DataObject.php';

class DataObjects_Currencies extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'currencies';                      // table name
    public $currencies_id;                   // int(11)  not_null primary_key auto_increment
    public $title;                           // string(32)  not_null
    public $code;                            // string(3)  not_null
    public $symbol_left;                     // string(12)  
    public $symbol_right;                    // string(12)  
    public $decimal_point;                   // string(1)  
    public $thousands_point;                 // string(1)  
    public $decimal_places;                  // string(1)  
    public $value;                           // real(13)  
    public $last_updated;                    // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Currencies',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
