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
	
	public function relations() {
        return array(
            'userprofile' => array(self::HAS_ONE, 'UserProfile', '', 'on' => 't.id = userprofile.userId'),
        );
    }
}
?>