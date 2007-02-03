<?php
/* $Id: PHWPage.php,v 1.1 2007/02/03 16:26:53 trinculescu Exp $ */

class PHWPage extends PHTMLContainer implements SAIPage {
	protected $app;
	protected $name;

	public function __construct(SApplication &$app, $name) {
		$this->app = &$app;
		$this->name = $name;
		parent::__construct();
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
		return "$this";
	}

	public function display() {
		print $this->fetch();
	}
}