<?php
/**
 * Table Definition for configuration
 */
require_once 'DB/DataObject.php';

class DataObjects_Configuration extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'configuration';                   // table name
    public $configuration_id;                // int(11)  not_null primary_key auto_increment
    public $configuration_title;             // string(64)  not_null
    public $configuration_key;               // string(64)  not_null
    public $configuration_value;             // string(255)  not_null
    public $configuration_description;       // string(255)  not_null
    public $configuration_group_id;          // int(11)  not_null
    public $sort_order;                      // int(5)  
    public $last_modified;                   // datetime(19)  binary
    public $date_added;                      // datetime(19)  not_null binary
    public $use_function;                    // string(255)  
    public $set_function;                    // string(255)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Configuration',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    public function &getDefaultLanguage() {
		$this->query("SELECT * FROM {$this->__table} c LEFT JOIN languages l ON c.configuration_value = l.code WHERE c.configuration_key = 'DEFAULT_LANGUAGE'");
		$this->fetch();
		return $this;
    }
    
    public function &getDefaultCurrency() {
		$this->query("SELECT * FROM {$this->__table} c LEFT JOIN currencies cu ON c.configuration_value = cu.code WHERE c.configuration_key = 'DEFAULT_CURRENCY'");
		$this->fetch();
		return $this;
    }
}
