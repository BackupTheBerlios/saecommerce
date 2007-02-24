<?php
/**
 * Table Definition for configuration_group
 */
require_once 'DB/DataObject.php';

class DataObjects_Configuration_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'configuration_group';             // table name
    public $configuration_group_id;          // int(11)  not_null primary_key auto_increment
    public $configuration_group_title;       // string(64)  not_null
    public $configuration_group_description;    // string(255)  not_null
    public $sort_order;                      // int(5)  
    public $visible;                         // int(1)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Configuration_group',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
