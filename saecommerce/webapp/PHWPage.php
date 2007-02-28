<?php
/* $Id: PHWPage.php,v 1.5 2007/02/28 10:03:16 trinculescu Exp $ */

class PHWPage extends PHTMLContainer implements SAIPage {
	protected $app;
	protected $name;
	protected $hasLayout = true;
	protected $layout = 'webapp/Layouts/default.php';
	protected $regions = array();

	public function __construct(SApplication &$app, $name, $hasLayout = true) {
		$this->app = &$app;
		$this->name = $name;
		$this->hasLayout = $hasLayout;
		parent::__construct();		
	}
	
	public function initLayout() {
		if ($this->hasLayout) {
			ob_start();
			require($this->layout);
			$contents = ob_get_contents();
			ob_end_clean();
			$this->dom->loadHTML($contents);
			$td = $this->dom->getElementById('categories_menu');
			print_r($td);
		}
	}

	public function categoriesMenu() {
		$this->categoryTree = new DBMenu();
	}
	
	public function init() {
		$this->categoriesMenu();
		$this->initLayout();
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
	
	public function fetch() {
		return $this->saveHTML();
	}

	public function beforeDisplay() {}

	public function display() {
		print $this->fetch();
	}
	
	public function afterDisplay() {}
}