<?php
/**
 * Table Definition for banners_history
 */
require_once 'DB/DataObject.php';

class DataObjects_Banners_history extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'banners_history';                 // table name
    public $banners_history_id;              // int(11)  not_null primary_key auto_increment
    public $banners_id;                      // int(11)  not_null
    public $banners_shown;                   // int(5)  not_null
    public $banners_clicked;                 // int(5)  not_null
    public $banners_history_date;            // datetime(19)  not_null binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Banners_history',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
