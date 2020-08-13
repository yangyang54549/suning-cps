<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-14
 */
class CmmdtybasicinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $cmmdtyList;
	
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
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCmmdtyList() {
		return $this->cmmdtyList;
	}
	
	public function setCmmdtyList($cmmdtyList) {
		$this->cmmdtyList = $cmmdtyList;
		$arr = array();
		foreach ($cmmdtyList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyList"] = $arr;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtybasicinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryCmmdtybasicinfo";
	}
	
}

class CmmdtyList {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	private $distributorCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getDistributorCode() {
		return $this->distributorCode;
	}

	public function setDistributorCode($distributorCode) {
		$this->distributorCode = $distributorCode;
		$this->apiParams["distributorCode"] = $distributorCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>