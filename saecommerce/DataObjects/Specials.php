<?php
/**
 * Table Definition for specials
 */
require_once 'DB/DataObject.php';

class DataObjects_Specials extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'specials';                        // table name
    public $specials_id;                     // int(11)  not_null primary_key auto_increment
    public $products_id;                     // int(11)  not_null
    public $specials_new_products_price;     // unknown(17)  not_null
    public $specials_date_added;             // datetime(19)  binary
    public $specials_last_modified;          // datetime(19)  binary
    public $expires_date;                    // datetime(19)  binary
    public $date_status_change;              // datetime(19)  binary
    public $status;                          // int(1)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Specials',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
