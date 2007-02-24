<?php
/**
 * Table Definition for sessions
 */
require_once 'DB/DataObject.php';

class DataObjects_Sessions extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'sessions';                        // table name
    public $sesskey;                         // string(32)  not_null primary_key
    public $expiry;                          // int(11)  not_null unsigned
    public $value;                           // blob(65535)  not_null blob

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Sessions',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
