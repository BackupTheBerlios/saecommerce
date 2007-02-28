<?php /* Smarty version 2.6.14, created on 2007-01-11 14:06:04
         compiled from default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'saurl', 'default.tpl', 1, false),)), $this); ?>
<a href="<?php echo smarty_function_saurl(array('page' => 'default'), $this);?>
">Self</a><br>
<a href="<?php echo smarty_function_saurl(array('page' => "nested/default"), $this);?>
">Link to a nested page using smarty plugin</a><br>
<a href="<?php echo smarty_function_saurl(array('page' => 'default','events' => "init:update"), $this);?>
">Some events</a><br>
<a href="<?php echo smarty_function_saurl(array('page' => 'phpinfo'), $this);?>
">phpinfo</a> (page without template)<br>