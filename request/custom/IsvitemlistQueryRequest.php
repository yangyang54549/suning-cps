<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-16
 */
class IsvitemlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $catentryType;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	/**
	 * 
	 */
	private $delFlag;
	
	/**
	 * 
	 */
	private $editBeginTime;
	
	/**
	 * 
	 */
	private $editEndTime;
	
	/**
	 * 
	 */
	private $fcateCode;
	
	/**
	 * 
	 */
	private $groupCodes;
	
	/**
	 * 
	 */
	private $keyWord;
	
	/**
	 * 
	 */
	private $maxPrice;
	
	/**
	 * 
	 */
	private $mixPrice;
	
	/**
	 * 
	 */
	private $orderType;
	
	/**
	 * 
	 */
	private $page;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $saleStatus;
	
	/**
	 * 
	 */
	private $scateCode;
	
	/**
	 * 
	 */
	private $supplierCmmdtyCode;
	
	/**
	 * 
	 */
	private $tcateCode;
	
	/**
	 * 
	 */
	private $pagenum;
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getCatentryType() {
		return $this->catentryType;
	}
	
	public function setCatentryType($catentryType) {
		$this->catentryType = $catentryType;
		$this->apiParams["catentryType"] = $catentryType;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getDelFlag() {
		return $this->delFlag;
	}
	
	public function setDelFlag($delFlag) {
		$this->delFlag = $delFlag;
		$this->apiParams["delFlag"] = $delFlag;
	}
	
	public function getEditBeginTime() {
		return $this->editBeginTime;
	}
	
	public function setEditBeginTime($editBeginTime) {
		$this->editBeginTime = $editBeginTime;
		$this->apiParams["editBeginTime"] = $editBeginTime;
	}
	
	public function getEditEndTime() {
		return $this->editEndTime;
	}
	
	public function setEditEndTime($editEndTime) {
		$this->editEndTime = $editEndTime;
		$this->apiParams["editEndTime"] = $editEndTime;
	}
	
	public function getFcateCode() {
		return $this->fcateCode;
	}
	
	public function setFcateCode($fcateCode) {
		$this->fcateCode = $fcateCode;
		$this->apiParams["fcateCode"] = $fcateCode;
	}
	
	public function getGroupCodes() {
		return $this->groupCodes;
	}
	
	public function setGroupCodes($groupCodes) {
		$this->groupCodes = $groupCodes;
		$this->apiParams["groupCodes"] = $groupCodes;
	}
	
	public function getKeyWord() {
		return $this->keyWord;
	}
	
	public function setKeyWord($keyWord) {
		$this->keyWord = $keyWord;
		$this->apiParams["keyWord"] = $keyWord;
	}
	
	public function getMaxPrice() {
		return $this->maxPrice;
	}
	
	public function setMaxPrice($maxPrice) {
		$this->maxPrice = $maxPrice;
		$this->apiParams["maxPrice"] = $maxPrice;
	}
	
	public function getMixPrice() {
		return $this->mixPrice;
	}
	
	public function setMixPrice($mixPrice) {
		$this->mixPrice = $mixPrice;
		$this->apiParams["mixPrice"] = $mixPrice;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getPage() {
		return $this->page;
	}
	
	public function setPage($page) {
		$this->page = $page;
		$this->apiParams["page"] = $page;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getSaleStatus() {
		return $this->saleStatus;
	}
	
	public function setSaleStatus($saleStatus) {
		$this->saleStatus = $saleStatus;
		$this->apiParams["saleStatus"] = $saleStatus;
	}
	
	public function getScateCode() {
		return $this->scateCode;
	}
	
	public function setScateCode($scateCode) {
		$this->scateCode = $scateCode;
		$this->apiParams["scateCode"] = $scateCode;
	}
	
	public function getSupplierCmmdtyCode() {
		return $this->supplierCmmdtyCode;
	}
	
	public function setSupplierCmmdtyCode($supplierCmmdtyCode) {
		$this->supplierCmmdtyCode = $supplierCmmdtyCode;
		$this->apiParams["supplierCmmdtyCode"] = $supplierCmmdtyCode;
	}
	
	public function getTcateCode() {
		return $this->tcateCode;
	}
	
	public function setTcateCode($tcateCode) {
		$this->tcateCode = $tcateCode;
		$this->apiParams["tcateCode"] = $tcateCode;
	}
	
	public function getPagenum() {
		return $this->pagenum;
	}
	
	public function setPagenum($pagenum) {
		$this->pagenum = $pagenum;
		$this->apiParams["pagenum"] = $pagenum;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.isvitemlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->page, 'page');
		RequestCheckUtil::checkNotNull($this->pagenum, 'pagenum');
	}
	
	public function getBizName(){
		return "queryIsvitemlist";
	}
	
}

?>