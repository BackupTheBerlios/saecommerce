<?php
/* $Id: PHWPage.php,v 1.3 2007/02/24 13:16:03 trinculescu Exp $ */

class PHWPage extends PHTMLContainer implements SAIPage {
	protected $app;
	protected $name;
	protected $hasLayout = true;
	protected $regions = array();

	public function __construct(SApplication &$app, $name, $hasLayout = true) {
		$this->app = &$app;
		$this->name = $name;
		$this->hasLayout = $hasLayout;
		parent::__construct();		
	}
	
	public function initLayout() {
		ob_start();
		require("webapp/Layouts/default.php");
		$contents = ob_get_contents();
		ob_end_clean();
		$this->dom->loadHTML($contents);
	}

	public function initCategories() {
		$this->categories = DB_DataObject::factory('categories');
	}
	
	public function init() {
		$this->initCategories();
		if ($this->hasLayout) {
			$this->initLayout();
		}
	}

	public function runEvents() {
		$events = explode(':', $this->app->GP($this->app->getGPEventsName()));
		if (is_array($events)) {
			foreach($events as $idx => $event) {
				$method = 'do' . ucfirst($event);
				if (method_exists($this, $method)) {
					call_user_func_array(array(&$this, $method), null);
				}
			}
		}
	}
	
	public function setRegion($node, $contents) {		
		$this->regions[md5(serialize($node))] = array('node' => $node, 'contents' => $contents);
	}

	public function & getRegion($node) {
		return $this->regions[md5(serialize($node))];
	}	

	public function fetch() {
		if (is_array($this->regions)) {
			foreach($this->regions as $region) {
				$region['node']->appendChild($region['contents']);
			}
		}

		return "$this";
	}

	public function beforeDisplay() {}

	public function display() {
		print $this->fetch();
	}
	
	public function afterDisplay() {}
}