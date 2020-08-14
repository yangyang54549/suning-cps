<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-1
 */
class CmmdtybasedetaillistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cmmdtyBaseQueryDTOs;
	
	/**
	 * 
	 */
	private $platformCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCmmdtyBaseQueryDTOs() {
		return $this->cmmdtyBaseQueryDTOs;
	}
	
	public function setCmmdtyBaseQueryDTOs($cmmdtyBaseQueryDTOs) {
		$this->cmmdtyBaseQueryDTOs = $cmmdtyBaseQueryDTOs;
		$arr = array();
		foreach ($cmmdtyBaseQueryDTOs as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyBaseQueryDTOs"] = $arr;
	}
	
	public function getPlatformCode() {
		return $this->platformCode;
	}
	
	public function setPlatformCode($platformCode) {
		$this->platformCode = $platformCode;
		$this->apiParams["platformCode"] = $platformCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtybasedetaillist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryCmmdtybasedetaillist";
	}
	
}

class CmmdtyBaseQueryDTOs {

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