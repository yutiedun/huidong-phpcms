<?php
class ArticleController extends CController{
	
	public function beforeAction($action) {
        if (empty(Yii::app()->user->id) || empty(Yii::app()->session["isadmin"])) {
            Yii::app()->user->logout();
			Yii::app()->session->destroy();
            $this->redirect("/user/login/login.html");
        }
        return true;
    }
	
	public function actionIndex(){
		echo "开发中。。。";
	}
	
}
?>