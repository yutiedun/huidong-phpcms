<?php

class Tag extends CActiveRecord
{

	private $_tableName;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
      	$this->_tableName = 'tag';
		return $this->_tableName;
	}

}

?>