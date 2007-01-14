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

$Id: DemoPage.php,v 1.2 2007/01/14 13:08:00 trinculescu Exp $
*/

class DemoPage extends SAPage {
	function __construct(DemoApplication &$app, $name) {
		parent::__construct($app, $name);
		$this->setContents('title', ucwords(str_replace('/', ' &raquo; ', $this->name)));
		$this->pageName = $this->getName();
		$this->className = get_class($this);
		$db = SADB::singleton();
	}
}