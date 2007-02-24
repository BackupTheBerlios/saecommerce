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

$Id: default.php,v 1.3 2007/02/24 13:16:24 trinculescu Exp $
*/

class Page_default extends PHWPage {
	public function fetch() {
		$contentNode = & $this->dom->getElementsByTagName('div')->item(0);
		if ($contentNode) {
			$t = $this->createTable(3, 3);
			$cell = $t->getCell(0, 0);
			$cell->appendChild($this->createElement('h1', 'Hello World'));
			$this->setRegion($contentNode, $t);
		}
		return parent::fetch();
	}
}