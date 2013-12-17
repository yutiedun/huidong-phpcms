<?php
class Pager
{
//类开始
	public $allsize		= 0;		//总记录条数
	public $pagesize	= 0;		//每页记录数
	public $allpage	= 0;		//总页数
	public $curpage	= 0;		//当前页数
	
	public function init(){
		
	}
	
	//计算总页数
	public function get_allpage(){
		if( $this->allsize ){
			if( $this->allsize < $this->pagesize ){ $this->allpage = 1; }
			if( $this->allsize % $this->pagesize ){
				$this->allpage = (int)($this->allsize / $this->pagesize) + 1;
			}else{
				$this->allpage = $this->allsize / $this->pagesize;
			}
		}else{
			$this->allpage = 0;
		}
		return $this->allpage;
	}
	
	//翻页链接
	public function get_pagelink(){
		$pagelink = '条数:'. $this->allsize .' 页数:'. $this->curpage .'&frasl;'. $this->allpage .' ';
		if( $this->curpage == 1 || $this->curpage == 0 ){
			$pagelink = $pagelink . '首页 | 上一页 | ';
		}else{
			$pagelink = $pagelink . '<a href="javascript:;" onclick="javascript:gotopage(1);">首页</a> | <a href="javascript:;"  onclick="javascript:gotopage('. ($this->curpage-1) .');">上一页</a> | ';
		}
		if($this->allpage>1){
			for($k=3;$k>=1;$k--){
				if($this->curpage-$k>0){
					$pagelink = $pagelink .'<a href="javascript:;"  onclick="javascript:gotopage('. ($this->curpage-$k) .');">'. ($this->curpage-$k) .'</a> ';
				}
			}
			for($i=$this->curpage;$i<=$this->allpage;$i++){
				if($i-$this->curpage>=4){
					break;
				}
				if($i==$this->curpage){
					$pagelink = $pagelink .'<a href="javascript:;"  onclick="javascript:gotopage('. ($i) .');" style="color:#f00;">'. $i .'</a> ';
				}else{
					$pagelink = $pagelink .'<a href="javascript:;"  onclick="javascript:gotopage('. ($i) .');">'. $i .'</a> ';
				}
			}
		}
		$pagelink = $pagelink .' | ';
		if( ($this->curpage == $this->allpage) || ($this->allpage == 0) ){
			$pagelink = $pagelink . '下一页 | 尾页';
		}else{
			$pagelink = $pagelink . '<a href="javascript:;" onclick="javascript:gotopage('. ($this->curpage+1) .');">下一页</a> | <a href="javascript:;" onclick="javascript:gotopage('. $this->allpage .');">尾页</a>';
		}
		$pagelink = $pagelink .'&nbsp;转到: <input name="curpage" type="text" id="curpage" size="3" maxlength="5" value="'. $this->curpage. '" />&nbsp;<input type="submit" value="GO" />';
		return $pagelink;
	}
//类结束
}
?>