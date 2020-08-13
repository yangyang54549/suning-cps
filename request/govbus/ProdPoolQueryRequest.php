<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-17
 */
class ProdPoolQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $categoryId;
	
	/**
	 * 
	 */
	private $pageNum;
	
	/**
	 * 
	 */
	private $pgSize;
	
	public function getCategoryId() {
		return $this->categoryId;
	}
	
	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		$this->apiParams["categoryId"] = $categoryId;
	}
	
	public function getPageNum() {
		return $this->pageNum;
	}
	
	public function setPageNum($pageNum) {
		$this->pageNum = $pageNum;
		$this->apiParams["pageNum"] = $pageNum;
	}
	
	public function getPgSize() {
		return $this->pgSize;
	}
	
	public function setPgSize($pgSize) {
		$this->pgSize = $pgSize;
		$this->apiParams["pgSize"] = $pgSize;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.prodpool.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryId, 'categoryId');
	}
	
	public function getBizName(){
		return "queryProdPool";
	}
	
}

?>