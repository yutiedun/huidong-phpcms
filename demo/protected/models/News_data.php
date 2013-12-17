<?php
class News_data extends CActiveRecord {
	private $_tableName;
	
	public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        $this->_tableName = 'v9_news_data';
        return $this->_tableName;
    }
	
	public function relations() {
        return array(
            'news' => array(self::HAS_ONE, 'News', '', 'on' => 't.id = news.id'),
        );
    }
}
?>