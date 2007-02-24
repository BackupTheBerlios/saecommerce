<?php
/**
 * Table Definition for reviews_description
 */
require_once 'DB/DataObject.php';

class DataObjects_Reviews_description extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'reviews_description';             // table name
    public $reviews_id;                      // int(11)  not_null primary_key
    public $languages_id;                    // int(11)  not_null primary_key
    public $reviews_text;                    // blob(65535)  not_null blob

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Reviews_description',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
