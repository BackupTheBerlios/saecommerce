<?php
//$Id: default.php,v 1.10 2007/04/11 14:38:54 trinculescu Exp $

class Page_default extends SAEPage {
	public function beforeDisplay() {
		parent::beforeDisplay();
		//init new products box
		$aProducts = $aCategories = array();
		if ($this->currentCategory) {
			//get categories			
			$categories = DB_DataObject::factory('categories');
			$categories->parent_id = $this->currentCategory;
			$categories->orderBy('categories_name');
			$catDescription = DB_DataObject::factory('categories_description');
			$catDescription->language_id = $this->getLanguage();
			$categories->joinAdd($catDescription);			
			if ($this->numberOfCategories = $categories->find()) {
				while ($categories->fetch()) {
					$aCategories[] = $categories->toArray();
				}
				$this->assign('categories', $aCategories);
			}
			
			//get products
			$products = DB_DataObject::factory('products');
			$prodToCat = DB_DataObject::factory('products_to_categories');			
			$prodDescription = DB_DataObject::factory('products_description');
			$prodDescription->language_id = $this->getLanguage();
			$prodToCat->categories_id = $this->currentCategory;
			$products->joinAdd($prodToCat);
			$products->joinAdd($prodDescription);
			if ($this->numberOfProducts = $products->find()) {
				while ($products->fetch()) {
					$aProducts[] = $products->toArray();
				}
				$this->assign('products', $aProducts);
			}
		}
		if ($this->numberOfCategories || !$this->currentCategory) {
			$this->boxNewProducts();
		}
	}
}