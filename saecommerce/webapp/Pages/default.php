<?php
//$Id: default.php,v 1.4 2007/02/26 19:01:47 trinculescu Exp $

class Page_default extends PHWPage {
	public function beforeDisplay() {
		$contentNode = & $this->dom->getElementById('content');
		if ($contentNode) {
			$t = $this->createTable(3, 3);
			$cell = $t->getCell(0, 0);
			$cell->appendChild($this->createElement('h1', 'Hello World'));
			$this->setRegion($contentNode, $t);
		}

		return parent::fetch();
	}
}