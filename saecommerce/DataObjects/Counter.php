<?php
/**
 * Table Definition for counter
 */
require_once 'DB/DataObject.php';

class DataObjects_Counter extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'counter';                         // table name
    public $startdate;                       // string(8)  
    public $counter;                         // int(12)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Counter',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
