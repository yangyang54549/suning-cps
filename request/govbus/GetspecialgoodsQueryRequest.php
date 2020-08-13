<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-31
 */
class GetspecialgoodsQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $categoryId;
	
	
	
	public function getCategoryId() {
		return $this->categoryId;
	}
	
	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		$this->apiParams["categoryId"] = $categoryId;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.govbus.getspecialgoods.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryId, 'categoryId');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryGetspecialgoods";
	}
	
}

?>