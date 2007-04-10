<?php
/* $Id: SAEPage.php,v 1.5 2007/04/10 16:56:30 trinculescu Exp $ */

class SAEPage extends SAPage {
	protected $content_type = 'text/html; charset=ISO-8859-1';

	public function __construct(SAEApplication &$app, $name) {
		if (SAE_ENABLE_CACHE) $this->getFromCache();
		parent::__construct($app, $name);
	}

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
	}	
	
	public function doChangeLanguage() {
		$languageId = $_POST['language'];
		$languages = DB_DataObject::factory('languages');
		$languages->languages_id = $languageId;		
		$configuration = DB_DataObject::factory('configuration');		
		$languageId = ($languages->count()) ? $languageId : $configuration->getDefaultLanguage()->languages_id;
		setcookie('language', $languageId, time() + 60 * 60 * 24 * 365, $this->app->getScriptPath());
		$_COOKIE['language'] = $languageId;
	}
	
	public function doChangeCurrency() {
		$currencyId = $_POST['currency'];
		$currencies = DB_DataObject::factory('currencies');
		$currencies->currencies_id = $currencyId;
		$configuration = DB_DataObject::factory('configuration');
		$currencyId = ($currencies->count()) ? $currencyId : $configuration->getDefaultCurrency()->currencies_id;
		setcookie('currency', $currencyId, time() + 60 * 60 * 24 * 365, $this->app->getScriptPath());
		$_COOKIE['currency'] = $currencyId;
	}
	
	public function getLanguage() {
		return $_COOKIE['language'];
	}
	
	public function getCurrency() {
		return $_COOKIE['currency'];
	}
	
	public function fetch() {
		$content = parent::fetch();
		if (SAE_ENABLE_CACHE) $this->cacheLite->save($content, $this->cacheId);
		return $content;
	}
	
	public function beforeDisplay() {
		//init left and right boxes
		$this->boxWhatsNew();
		$this->boxSpecial();
		$this->boxShoppingCart();
		$this->boxBestSellers();
		$this->boxCurrencies();
		$this->boxInformation();
		$this->boxLanguages();
	}

	public function afterDisplay() {}
	
	protected function getFromCache() {
		$this->cacheId = md5(serialize($_GET + $_POST + $_COOKIE));
		$this->cacheLite = new Cache_Lite(array('cacheDir' => 'tmp/', 'lifeTime' => 3600));
		if ($data = $this->cacheLite->get($this->cacheId)) {
			print $data;
			exit(0);
		}
	}
	
	protected function boxWhatsNew() {
		$products = DB_DataObject::factory('products');
		$products->orderBy('products_date_added DESC');
		if ($products->find(true)) {
			$products->getLinks();
			$this->assign('product', $products->toArray());
			$this->setContents('WHATS_NEW', Smarty::fetch('boxes/whats_new.tpl'));
		}
	}
	
	protected function boxSpecial() {
		$specials = DB_DataObject::factory('specials');
		$specials->orderBy('RAND()');
		$specials->limit(0, 1);
		if ($specials->find(true)) {
			$specials->getLinks();
			$specials->_products_id->getLinks();
			$this->assign('specials', $specials->toArray());
			$this->setContents('SPECIAL', Smarty::fetch('boxes/special.tpl'));
		}
	}
	
	protected function boxShoppingCart() {
		$this->setContents('SHOPPING_CART', Smarty::fetch('boxes/shopping_cart.tpl'));
	}
	
	protected function boxBestSellers() {
		$product = DB_DataObject::factory('products');
		$product->orderBy('products_ordered DESC');
		$product->limit(0, 5);
		$product->find();
		while ($product->fetch()) {
			$product->getLinks();
			$products[] = $product->toArray();
		}
		$this->assign('products', $products);
		$this->setContents('BEST_SELLERS', Smarty::fetch('boxes/best_sellers.tpl'));
	}
	
	protected function boxCurrencies() {
		//build the currencies form
		$frmCurrency =& new HTML_QuickForm('currency','POST', SAUrl::Url($this->name, array($this->app->getGPEventsName() => 'changeCurrency') + $_GET));
		$selectCurrency = $frmCurrency->addElement('select', 'currency', null, null, array('onChange' => "document.forms['currency'].submit()", 'class' => "coolcombo"));
		$selectCurrency->loadQuery($dsn = DSN, 'SELECT * FROM currencies', 'title', 'currencies_id');
		$selectCurrency->setSelected($this->getCurrency());
		//create the Smarty renderer
		$renderer =& new HTML_QuickForm_Renderer_ArraySmarty($this, true);
		$frmCurrency->accept($renderer);
		$this->assign('frmCurrency', $renderer->toArray());
		
		$this->setContents('CURRENCIES', Smarty::fetch('boxes/currencies.tpl'));
	}
	
	protected function boxInformation() {
		$this->setContents('INFORMATION', Smarty::fetch('boxes/information.tpl'));
	}
	
	protected function boxLanguages() {
		//build the languages form
		$frmLanguages =& new HTML_QuickForm('language','POST', SAUrl::Url($this->name, array($this->app->getGPEventsName() => 'changeLanguage') + $_GET));
		$selectLanguage = $frmLanguages->addElement('select', 'language', null, null, array('onChange' => "document.forms['language'].submit()", 'class' => "coolcombo"));
		$selectLanguage->loadQuery($dsn = DSN, 'SELECT * FROM languages ORDER BY sort_order', 'name', 'languages_id');
		$selectLanguage->setSelected($this->getLanguage());
		//create the Smarty renderer
		$renderer =& new HTML_QuickForm_Renderer_ArraySmarty($this, true);
		$frmLanguages->accept($renderer);
		$this->assign('frmLanguages', $renderer->toArray());
		
		$this->setContents('LANGUAGES', Smarty::fetch('boxes/languages.tpl'));
	}
	
   	protected function boxCategories($node) {
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
            <td class="box" onmouseover="this.style.backgroundColor = 'white'" onmouseout="this.style.backgroundColor = '#DDD7C9'">
				<a href="<?= SAUrl::Url('default', array('cPath' => $cPath)) ?>"><div><?= str_repeat('&nbsp;&nbsp;', $node['level'])?><img src="images/arrow.gif" border="0"/>&nbsp;<?= ($node['id'] == $aCPath[$node['level']]) ? '<b>' : '' ?><?= $cat->categories_name ?></div></a>
            </td>
          </tr>	                              
          <?php
          	if (($this->tree->hasChildren($node['id'])) && ($node['id'] == $aCPath[$node['level']])) {
          		$this->boxCategories($this->tree->getChild($node['id']));
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