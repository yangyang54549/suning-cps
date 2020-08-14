<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-21
 */
class CmmdtymodelQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cmmdtyCodes;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCmmdtyCodes() {
		return $this->cmmdtyCodes;
	}
	
	public function setCmmdtyCodes($cmmdtyCodes) {
		$this->cmmdtyCodes = $cmmdtyCodes;
		$arr = array();
		foreach ($cmmdtyCodes as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyCodes"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.cmmdtymodel.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryCmmdtymodel";
	}
	
}

class CmmdtyCodes {

	private $apiParams = array();
	
	private $cmmdtyCode;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>