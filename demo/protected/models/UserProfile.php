<?php
class UserProfile extends CActiveRecord {
	private $_tableName;
	
	public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        $this->_tableName = 'userprofile';
        return $this->_tableName;
    }
}
?>