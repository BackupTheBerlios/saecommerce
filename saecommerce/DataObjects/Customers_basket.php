<?php
/**
 * Table Definition for customers_basket
 */
require_once 'DB/DataObject.php';

class DataObjects_Customers_basket extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'customers_basket';                // table name
    public $customers_basket_id;             // int(11)  not_null primary_key auto_increment
    public $customers_id;                    // int(11)  not_null
    public $products_id;                     // blob(255)  not_null blob
    public $customers_basket_quantity;       // int(2)  not_null
    public $final_price;                     // unknown(17)  
    public $customers_basket_date_added;     // string(8)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Customers_basket',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
