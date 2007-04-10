<?php
/*
+-----------------------------------------------------------------------+
| SkyApp - The PHP Application Framework.                               |
| http://www.skyweb.ro/                                                 |
+-----------------------------------------------------------------------+
| This source file is released under LGPL license, available through    |
| the world wide web at http://www.gnu.org/copyleft/lesser.html.        |
| This library is distributed WITHOUT ANY WARRANTY. Please see the LGPL |
| for more details.                                                     |
+-----------------------------------------------------------------------+
| Authors: Andi Trînculescu <andi@skyweb.ro>                            |
+-----------------------------------------------------------------------+

$Id: startup.php,v 1.10 2007/04/10 16:56:30 trinculescu Exp $
*/

//add PEAR to include path
ob_start();

set_include_path(get_include_path() . PATH_SEPARATOR . 'lib/pear');

define('SAE_CORE_DIR', 'core/');
define('SAE_LIB_DIR', 'lib/');
define('SAE_CLASSES_DIR', 'classes/');
define('SAE_SMARTY_DIR', SAE_LIB_DIR . 'Smarty-2.6.14/libs/');
define('SAE_WEBAPP_DIR', 'webapp/');
define('SAE_LOGS_DIR', 'logs/');
define('SAE_SECRET_KEY', 'monaco');
define('SAE_SESSION_NAME', 'sid');
define('SAE_SESSION_FORCE_COOKIES', true);
define('SAE_ENABLE_CACHE', false);
define('DSN', 'mysql://root:1425@localhost/saecommerce');
define('DEFAULT_LANGUAGE', 1);
define('DEFAULT_CURRENCY', 1);

//includes for SA
require_once(SAE_SMARTY_DIR	.	'Smarty.class.php');
require_once(SAE_CORE_DIR	.	'SADebug.php');
require_once(SAE_CORE_DIR	.	'SAExceptions.php');
require_once(SAE_CORE_DIR	.	'SAUrl.php');
require_once(SAE_CORE_DIR	.	'SAIPage.php');
require_once(SAE_CORE_DIR	.	'SAPage.php');
require_once(SAE_CORE_DIR	.	'SAPageHandler.php');
require_once(SAE_CORE_DIR	.	'SARequest.php');
require_once(SAE_CORE_DIR	.	'SALog.php');
require_once(SAE_CORE_DIR	.	'SApplication.php');

require_once('PEAR.php');
require_once('DB/DataObject.php');
require_once('Tree/Tree.php');
require_once ('HTML/QuickForm.php');
require_once('HTML/QuickForm/Renderer/ArraySmarty.php');
require_once('Cache/Lite.php');

$options = &PEAR::getStaticProperty('DB_DataObject','options');
$options = array(
    'database'         => DSN,
    'schema_location'  => '/home/andi/public_html/saecommerce/DataObjects',
    'class_location'   => '/home/andi/public_html/saecommerce/DataObjects',
    'class_prefix'     => 'DataObjects_',
);
//DB_DataObject::debugLevel(5);
//includes for webapp
require_once(SAE_WEBAPP_DIR	.	'SAEApplication.php');

