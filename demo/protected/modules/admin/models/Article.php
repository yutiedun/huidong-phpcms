<?php

class Article extends CActiveRecord
{

	private $_tableName;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
      	$this->_tableName = 'article';
		return $this->_tableName;
	}

}

?>