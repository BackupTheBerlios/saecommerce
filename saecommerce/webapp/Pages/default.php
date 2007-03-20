<?php
//$Id: default.php,v 1.8 2007/03/20 09:13:48 trinculescu Exp $

class Page_default extends SAEPage {
	public function init() {
		parent::init();
		//init new products box
		$this->boxNewProducts();
	}
	
	protected function boxNewProducts() {
		$this->setContents('MIDDLE_BOX', Smarty::fetch('boxes/new_products.tpl'));
	}
}