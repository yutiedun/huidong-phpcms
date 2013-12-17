<?php
class HomeController extends CController{
	
	public function actionIndex(){
		$smarty = Yii::app()->smarty;
		$curtime = date("Y-m-d H:i:s");
		$smarty->assign("time", $curtime);
		$sitename = Yii::app()->name;
		$smarty->assign("sitename", $sitename);
		if(Yii::app()->user->id){
			$user = User::model()->find("uid=". Yii::app()->user->id);
		}
		$smarty->assign("user", $user);
		$smarty->display($smarty->template_dir["cn"] ."/site/index.tpl");
		$smarty = null;
	}
	
}
?>