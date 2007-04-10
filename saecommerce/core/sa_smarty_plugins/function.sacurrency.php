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

$Id: function.sacurrency.php,v 1.1 2007/04/10 16:56:30 trinculescu Exp $
*/

/*! \brief Smarty plugin for formating the currency
 * 
 */

function smarty_function_sacurrency($params, &$smarty) {
	$currency = DB_DataObject::factory('currencies');
	$price = $currency->format($params['amount']);
	return $price;
}