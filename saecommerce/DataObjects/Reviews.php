<?php
/**
 * Table Definition for reviews
 */
require_once 'DB/DataObject.php';

class DataObjects_Reviews extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'reviews';                         // table name
    public $reviews_id;                      // int(11)  not_null primary_key auto_increment
    public $products_id;                     // int(11)  not_null
    public $customers_id;                    // int(11)  
    public $customers_name;                  // string(64)  not_null
    public $reviews_rating;                  // int(1)  
    public $date_added;                      // datetime(19)  binary
    public $last_modified;                   // datetime(19)  binary
    public $reviews_read;                    // int(5)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Reviews',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
