<?php
/* $Id: SAEPage.php,v 1.2 2007/03/18 20:12:44 trinculescu Exp $ */
class SAEPage extends SAPage {
	public function init() {
		$options = array(
			'table' => 'categories',
			'columnNameMaps' => array(
				'id' => 'categories_id',
				'parentId' => 'parent_id'
			)
		);
		$this->tree = Tree::setupMemory('DBsimple', DSN, $options);
		$this->tree->setup();
	}
	
   	protected function buildCategories($node) {
   		$cPath = $this->app->GP('cPath');
        do {
        	$cat = DB_DataObject::factory('categories');
        	$cat->get($node['id']);
        	$cat->getLinks();
        ?>
          <tr>
            <td>
              &nbsp;
            </td>
            <td class="box" style="border-bottom:1px solid grey">
				<?= str_repeat('&nbsp;&nbsp;', $level)?><img src="images/arrow.gif" />&nbsp;<a href="<?= SAUrl::Url('default', array('cPath' => $id)) ?>"><?= $cat->_categories_id->categories_name ?></a>
            </td>
          </tr>	                              
          <?php
          	if ($id == $cPath[$level]) {	                              		
          		$this->buildCategories($this->tree->getChilds($id), $level + 1, $aCpath);
          	}
        }
		while ($node = $this->tree->getNext($node['id']));
   	}

	public function beforeDisplay() {}

	public function afterDisplay() {}
}