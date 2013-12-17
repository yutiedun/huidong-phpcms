<?php
class TagListController extends CController{
	
	private $pagesize = 1;
	
	public function actionIndex(){
		$this->actionTagList();
	}
	
	public function actionTagList(){
		$smarty = Yii::app()->smarty;
		$curpage = isset($_POST['curpage']) ? intval($_POST['curpage']) : '1';
		if($curpage=='' || is_numeric($curpage)==false || $curpage<=0){
			$curpage = 1;
		}
		$criteria = new CDbCriteria();
        $criteria->condition = "1=1";
        
		$allsize = Tag::model()->count($criteria->condition);
		$pager = Yii::app()->pager;
		$pager->allsize		= $allsize;		//总记录条数
		$pager->pagesize	= $this->pagesize;	//每页数量
		$allpage = $pager->get_allpage();
		if($allsize>0){
			if($allpage>0 && $curpage>$allpage){
				$curpage = $allpage;
				$pager->curpage	= $curpage;
			}
		}else{
			$curpage = 1;
			$pager->curpage	= 0;
		}
		$pager->curpage		= $curpage;		//当前页数
		$pagelink = $pager->get_pagelink();
		$pager = null;
		$smarty->assign("pagelink", $pagelink);
		
		$criteria->order = "id asc";
		$criteria->offset = ($curpage-1)*$this->pagesize;
		$criteria->limit = $this->pagesize;
		$data = Tag::model()->findAll($criteria);
		//print_r($data);die();
		$smarty->assign("data", $data);
		$smarty->display($smarty->template_dir["cn"] ."/site/tag_list.tpl");
		$smarty = null;
	}
	
}
?>