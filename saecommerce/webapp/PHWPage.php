<?php
/* $Id: PHWPage.php,v 1.2 2007/02/04 10:19:59 trinculescu Exp $ */

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

	public function getContents() {}

	public function fetch() {
		ob_start();
		require("webapp/Layouts/default.php");
		$contents = ob_get_contents();
		ob_end_clean();
		$this->dom->loadHTML($contents);

		$contentNode = & $this->dom->getElementsByTagName('div')->item(0);
		if ($contentNode) {
			$t = $this->createTable(3, 3);
			$cell = $t->getCell(0, 0);
			$cell->appendChild($this->createElement('h1', 'Hello World'));
			$contentNode->appendChild($t);
		}

		return "$this";
	}

	public function display() {
		print $this->fetch();
	}
}