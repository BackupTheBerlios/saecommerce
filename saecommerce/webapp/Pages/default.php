<?php
//$Id: default.php,v 1.5 2007/02/28 10:03:16 trinculescu Exp $

class Page_default extends PHWPage {
	public function beforeDisplay() {
		$contentNode = $this->dom->getElementById('content');
		if ($contentNode) {
			$t = $this->createTable(3, 3);
			$cell = $t->getCell(0, 0);
			$cell->appendChild($this->dom->createElement('h1', 'Hello World'));
			$contentNode->appendChild($t);
		}
	}
}