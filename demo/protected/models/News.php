<?php
class News extends CActiveRecord {
	private $_tableName;
	
	public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        $this->_tableName = 'v9_news';
        return $this->_tableName;
    }
	
	public function relations() {
        return array(
            'news_data' => array(self::HAS_ONE, 'News_data', '', 'on' => 't.id = news_data.id'),
        );
    }
}
?>