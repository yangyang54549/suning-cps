<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-15
 */
class InverstmentcommodityQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $categoryId;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $couponMark;
	
	/**
	 * 
	 */
	private $pageIndex;
	
	/**
	 * 
	 */
	private $picHeight;
	
	/**
	 * 
	 */
	private $picWidth;
	
	/**
	 * 
	 */
	private $size;
	
	public function getCategoryId() {
		return $this->categoryId;
	}
	
	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		$this->apiParams["categoryId"] = $categoryId;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCouponMark() {
		return $this->couponMark;
	}
	
	public function setCouponMark($couponMark) {
		$this->couponMark = $couponMark;
		$this->apiParams["couponMark"] = $couponMark;
	}
	
	public function getPageIndex() {
		return $this->pageIndex;
	}
	
	public function setPageIndex($pageIndex) {
		$this->pageIndex = $pageIndex;
		$this->apiParams["pageIndex"] = $pageIndex;
	}
	
	public function getPicHeight() {
		return $this->picHeight;
	}
	
	public function setPicHeight($picHeight) {
		$this->picHeight = $picHeight;
		$this->apiParams["picHeight"] = $picHeight;
	}
	
	public function getPicWidth() {
		return $this->picWidth;
	}
	
	public function setPicWidth($picWidth) {
		$this->picWidth = $picWidth;
		$this->apiParams["picWidth"] = $picWidth;
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function setSize($size) {
		$this->size = $size;
		$this->apiParams["size"] = $size;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.inverstmentcommodity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryInverstmentcommodity";
	}
	
}

?>