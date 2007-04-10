<?php
//$Id: default.php,v 1.9 2007/04/10 16:56:30 trinculescu Exp $

class Page_default extends SAEPage {
	public function beforeDisplay() {
		parent::beforeDisplay();
		//init new products box
		$this->boxNewProducts();
	}
	
	protected function boxNewProducts() {
		$product = DB_DataObject::factory('products');
		$productDescription = DB_DataObject::factory('products_description');
		$productDescription->language_id = $_COOKIE['language'];
		$product->orderBy('products_date_added');
		$product->limit(0, 4);
		$product->joinAdd($productDescription);
		$product->find();
		while ($product->fetch()) {
			$products[] = $product->toArray();
		}
		$this->assign('products', $products);
		$this->setContents('MIDDLE_BOX', Smarty::fetch('boxes/new_products.tpl'));
	}
}