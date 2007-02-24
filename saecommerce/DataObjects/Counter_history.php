<?php
/**
 * Table Definition for counter_history
 */
require_once 'DB/DataObject.php';

class DataObjects_Counter_history extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'counter_history';                 // table name
    public $month;                           // string(8)  
    public $counter;                         // int(12)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Counter_history',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
