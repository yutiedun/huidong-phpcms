<?php
class HomeController extends CController{
	
	public function actionIndex(){
		$smarty = Yii::app()->smarty;
		$smarty->assign("sitename", Yii::app()->name);
		$smarty->assign("approot", Yii::app()->params["approot"]);
		$categories = Category::model()->findAll("type=0 order by listorder asc");
		$smarty->assign("categories", $categories);
		$smarty->display($smarty->template_dir["cn"] ."/site/index.tpl");
		$smarty = null;
	}
	
}
?>