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

$Id: SAEApplication.php,v 1.3 2007/03/10 09:09:46 trinculescu Exp $
*/

require_once(SAE_WEBAPP_DIR . 'SAEPage.php');

class SAEApplication extends SApplication {
	function __construct() {
		$this->home = dirname(__FILE__);
		parent::__construct();
	}

	function __destruct() {}
}
