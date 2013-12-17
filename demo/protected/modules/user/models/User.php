<?php
class User extends CActiveRecord {
	private $_tableName;
		
	public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        $this->_tableName = 'user';
        return $this->_tableName;
    }
	
	/*public function relations() {
        return array(
            'userprofile' => array(self::HAS_ONE, 'UserProfile', '', 'on' => 't.id = userprofile.userId'),
        );
    }*/
	
	public function validatePassword($pass_ori){
		$salt = $this->salt;
		$password = md5($salt . $pass_ori);
		if($this->password==$password){
			$this->logintime = date("Y-m-d H:i:s");
			$this->loginip = $_SERVER['REMOTE_ADDR'];
			$this->save();
			return true;
		}else{
			return false;
		}
	}
}
?>