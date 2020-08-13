<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-25
 */
class WhalegoldcoinQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $reveiveTime;
	
	/**
	 * 
	 */
	private $sign;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $version;
	
	/**
	 * 
	 */
	private $snUnionIdTwo;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getReveiveTime() {
		return $this->reveiveTime;
	}
	
	public function setReveiveTime($reveiveTime) {
		$this->reveiveTime = $reveiveTime;
		$this->apiParams["reveiveTime"] = $reveiveTime;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getVersion() {
		return $this->version;
	}
	
	public function setVersion($version) {
		$this->version = $version;
		$this->apiParams["version"] = $version;
	}
	
	public function getSnUnionIdTwo() {
		return $this->snUnionIdTwo;
	}
	
	public function setSnUnionIdTwo($snUnionIdTwo) {
		$this->snUnionIdTwo = $snUnionIdTwo;
		$this->apiParams["snUnionIdTwo"] = $snUnionIdTwo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.whalegoldcoin.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->reveiveTime, 'reveiveTime');
		RequestCheckUtil::checkNotNull($this->sign, 'sign');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->version, 'version');
		RequestCheckUtil::checkNotNull($this->snUnionIdTwo, 'snUnionIdTwo');
	}
	
	public function getBizName(){
		return "queryWhalegoldcoin";
	}
	
}

?>