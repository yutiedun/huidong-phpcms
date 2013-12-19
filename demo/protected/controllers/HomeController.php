<?php
class HomeController extends CController{
	
	public function actionIndex(){
		$smarty = Yii::app()->smarty;
		$smarty->assign("sitename", Yii::app()->name);
		$smarty->assign("approot", Yii::app()->params["approot"]);
		$categories = Category::model()->findAll("type=0 order by listorder asc limit 10");
		$smarty->assign("categories", $categories);
		$news = News::model()->findAll("status=99 order by id desc limit 10");
		$smarty->assign("news", $news);
		$smarty->display($smarty->template_dir["cn"] ."/site/index.tpl");
		$smarty = null;
	}
	
}
?>