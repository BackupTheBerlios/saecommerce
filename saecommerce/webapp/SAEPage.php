<?php
/* $Id: SAEPage.php,v 1.3 2007/03/19 11:48:29 trinculescu Exp $ */
class SAEPage extends SAPage {
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
	
	public function beforeDisplay() {}

	public function afterDisplay() {}
	
   	protected function buildCategories($node) {
   		$aCPath = explode('_', $this->app->GP('cPath'));
        do {
        	$cat = DB_DataObject::factory('categories');
        	$cat->get($node['id']);
        	$cat->getLinks();
        	$cPath = $this->getCategoryPath($node);
        ?>
          <tr>
            <td>
              &nbsp;
            </td>
            <td class="box" style="border-bottom:1px solid grey">
				<?= str_repeat('&nbsp;&nbsp;', $node['level'])?><img src="images/arrow.gif" />&nbsp;<?= ($node['id'] == $aCPath[$node['level']]) ? '<b>' : '' ?><a href="<?= SAUrl::Url('default', array('cPath' => implode('_', $cPath))) ?>"><?= $cat->_categories_id->categories_name ?></a>
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
   		$result = array();
   		foreach($path as $cat) {   			
   			$result[] = $cat['id'];
   		}
   		return $result;
   	}
}