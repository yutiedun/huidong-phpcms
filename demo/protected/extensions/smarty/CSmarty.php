<?php
require_once('Smarty.class.php'); //包含smarty类文件

class CSmarty extends Smarty {  
	function __construct() {  
		parent::__construct();
		$this->template_dir = array("en"=>Yii::app()->basePath ."/templates/en", "cn"=>Yii::app()->basePath ."/templates/cn");
		$this->compile_dir = Yii::app()->basePath ."/templates_c";
		$this->caching = false;
		$this->cache_dir = Yii::app()->basePath ."/templates_cache";
		//$this->plugins_dir = array(Yii::app()->basePath ."/extensions/smarty/plugins", Yii::app()->basePath ."/extensions/smarty/sysplugins");
		$this->left_delimiter  =  '{';
		$this->right_delimiter =  '}';
		$this->cache_lifetime = 3600;
	}
	function init() {}
}
?>