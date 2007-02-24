<?php
/**
 * Table Definition for banners
 */
require_once 'DB/DataObject.php';

class DataObjects_Banners extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'banners';                         // table name
    public $banners_id;                      // int(11)  not_null primary_key auto_increment
    public $banners_title;                   // string(64)  not_null
    public $banners_url;                     // string(255)  not_null
    public $banners_image;                   // string(64)  not_null
    public $banners_group;                   // string(10)  not_null
    public $banners_html_text;               // blob(65535)  blob
    public $expires_impressions;             // int(7)  
    public $expires_date;                    // datetime(19)  binary
    public $date_scheduled;                  // datetime(19)  binary
    public $date_added;                      // datetime(19)  not_null binary
    public $date_status_change;              // datetime(19)  binary
    public $status;                          // int(1)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Banners',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
