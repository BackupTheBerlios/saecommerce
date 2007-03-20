<?php
/* $Id: SAEPage.php,v 1.4 2007/03/20 09:13:48 trinculescu Exp $ */

class SAEPage extends SAPage {
	protected $content_type = 'text/html; charset=ISO-8859-1';

	public function init() {
		$options = array(
			'table' => 'categories',
			'order' => 'sort_order',
			'columnNameMaps' => array(
				'id' => 'categories_id',
				'parentId' => 'parent_id'
			)
		);
		$this->tree = Tree::setupMemory('DBsimple', DSN, $options);
		$this->tree->setup();
		
		//init left and right boxes
		$this->boxWhatsNew();
		$this->boxSpecial();
		$this->boxShoppingCart();
		$this->boxBestSellers();
		$this->boxInformation();
	}
	
	public function doChangeLanguage() {
		setcookie('language', $_POST['language'], time() + 60 * 60 * 24 * 365, $this->app->getScriptPath());
		$_COOKIE['language'] = $_POST['language'];
	}
	
	public function beforeDisplay() {
		$frmLanguages =& new HTML_QuickForm('language','POST', SAUrl::Url($this->name, array($this->app->getGPEventsName() => 'changeLanguage')));
		$selectLanguage = $frmLanguages->addElement('select', 'language', null, null, array('onChange' => "document.forms['language'].submit()", 'class' => "coolcombo"));
		$selectLanguage->loadQuery($dsn = DSN, 'SELECT * FROM languages', 'name', 'languages_id');
		$selectLanguage->setSelected($_COOKIE['language']);
		$this->frmLanguages = $frmLanguages->toArray();
	}

	public function afterDisplay() {}
	
	protected function boxWhatsNew() {
		$this->setContents('WHATS_NEW', Smarty::fetch('boxes/whats_new.tpl'));
	}
	
	protected function boxSpecial() {
		$this->setContents('SPECIAL', Smarty::fetch('boxes/special.tpl'));
	}
	
	protected function boxShoppingCart() {
		$this->setContents('SHOPPING_CART', Smarty::fetch('boxes/shopping_cart.tpl'));
	}
	
	protected function boxBestSellers() {
		$this->setContents('BEST_SELLERS', Smarty::fetch('boxes/best_sellers.tpl'));
	}
	
	protected function boxInformation() {
		$this->setContents('INFORMATION', Smarty::fetch('boxes/information.tpl'));
	}
	
   	protected function buildCategories($node) {
   		$aCPath = explode('_', $this->app->GP('cPath'));
        do {
        	$cat = DB_DataObject::factory('categories_description');
        	$cat->language_id = $_COOKIE['language'];
        	$cat->get($node['id']);
        	$cPath = $this->getCategoryPath($node);
        ?>
          <tr>
            <td>
              &nbsp;
            </td>
            <td class="box" style="border-bottom:1px solid grey">
				<?= str_repeat('&nbsp;&nbsp;', $node['level'])?><img src="images/arrow.gif" />&nbsp;<?= ($node['id'] == $aCPath[$node['level']]) ? '<b>' : '' ?><a href="<?= SAUrl::Url('default', array('cPath' => $cPath)) ?>"><?= $cat->categories_name ?></a>
            </td>
          </tr>	                              
          <?php
          	if (($this->tree->hasChildren($node['id'])) && ($node['id'] == $aCPath[$node['level']])) {
          		$this->buildCategories($this->tree->getChild($node['id']));
          	}
        }
		while ($node = $this->tree->getNext($node['id']));
   	}
   	
   	protected function getCategoryPath($node) {
   		$path = $this->tree->getPath($node['id']);
   		$aCpath = array();
   		foreach($path as $category) {   			
   			$aCpath[] = $category['id'];
   		}
   		
   		return implode('_', $aCpath);
   	}
}