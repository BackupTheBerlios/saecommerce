<?php
/* $Id: SAEPage.php,v 1.1 2007/03/10 09:09:46 trinculescu Exp $ */

class SAEPage extends SAPage {
	public function categoriesMenu() {
		$this->categoryTree = new DBMenu();
	}

	public function init() {
		$this->categoriesMenu();
	}

	public function beforeDisplay() {}

	public function afterDisplay() {}
}