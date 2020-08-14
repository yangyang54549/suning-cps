<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class StoreassociationalwordQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $keyword;
	
	/**
	 * 
	 */
	private $pnumber;
	
	/**
	 * 
	 */
	private $psize;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getKeyword() {
		return $this->keyword;
	}
	
	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->apiParams["keyword"] = $keyword;
	}
	
	public function getPnumber() {
		return $this->pnumber;
	}
	
	public function setPnumber($pnumber) {
		$this->pnumber = $pnumber;
		$this->apiParams["pnumber"] = $pnumber;
	}
	
	public function getPsize() {
		return $this->psize;
	}
	
	public function setPsize($psize) {
		$this->psize = $psize;
		$this->apiParams["psize"] = $psize;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.storeassociationalword.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryStoreassociationalword";
	}
	
}

?>