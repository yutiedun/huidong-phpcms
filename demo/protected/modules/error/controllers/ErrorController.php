<?php
class ErrorController extends CController{
	
	public function actionIndex(){
		$smarty = Yii::app()->smarty;
		$smarty->display($smarty->template_dir["cn"] ."/error/index.tpl");
	}
	
}
?>