<?php
class LoginController extends CController{
	
	public function actionIndex(){
		if(empty(Yii::app()->user->id)){
			header("location: /user/login/login.html");
		}else{
			header("location: /");
		}
	}
	
	public function actionLogin(){
		$smarty = Yii::app()->smarty;
		$smarty->display($smarty->template_dir["cn"] ."/user/login.tpl");
		$smarty = null;
	}
	
	public function actionLogin_ok(){
		$username = $_POST["username"];
		$password = $_POST["password"];
		if(empty($username) || empty($password)){
			echo "<h2>请填写用户名和密码</h2>";
			die();
		}
		$identity = new UserIdentity($username,$password);
		$identity->authenticate();
		switch($identity->errorCode){
			case 0:
				Yii::app()->user->login($identity);
				Yii::app()->user->id = $identity->uid;
				Yii::app()->user->name = $identity->username;
				Yii::app()->session["isadmin"] = $identity->isadmin;
				header("location: /");
				break;
			case 1:
				echo "用户名错误";
				break;
			case 2:
				echo "密码错误";
				break;
			case 100:
				echo "未知错误";
				break;
			default:
				echo "未知错误";
				break;
		}
	}
	
	public function actionLogout(){
		Yii::app()->user->logout();
		Yii::app()->session->destroy();
		header("location: /");
	}
	
	public function actionGenPass(){
		$pass_ori = $_POST["pass_ori"];
		if(empty($pass_ori)){
			$salt = "";
			$password = "";
		}else{
			$salt = uniqid("", true);
			$password = md5($salt . $pass_ori);
		}
		$smarty = Yii::app()->smarty;
		$smarty->assign("pass_ori", $pass_ori);
		$smarty->assign("salt", $salt);
		$smarty->assign("password", $password);
		$smarty->display($smarty->template_dir["cn"] ."/user/gen_pass.tpl");
		$smarty = null;
	}
	
}
?>