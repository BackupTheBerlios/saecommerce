<?php
/**
 * Table Definition for categories_description
 */
require_once 'DB/DataObject.php';

class DataObjects_Categories_description extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'categories_description';          // table name
    public $categories_id;                   // int(11)  not_null primary_key
    public $language_id;                     // int(11)  not_null primary_key
    public $categories_name;                 // string(32)  not_null multiple_key

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Categories_description',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
