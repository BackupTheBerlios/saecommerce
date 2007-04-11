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

$Id: function.sacpath.php,v 1.1 2007/04/11 14:39:13 trinculescu Exp $
*/

/*! \brief Smarty plugin for generating the category path
 * 
 */

function smarty_function_sacpath($params, &$smarty) {
	$tree = $smarty->get_template_vars('categoryTree');
   	$path = $tree->getPath($params['id']);
   	$aCpath = array();
   	foreach($path as $category) {   			
   		$aCpath[] = $category['id'];
   	}
   	return implode('_', $aCpath);
}