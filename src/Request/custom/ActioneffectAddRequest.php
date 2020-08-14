<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-14
 */
class ActioneffectAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $profitValue;
	
	/**
	 * 
	 */
	private $actionType;
	
	/**
	 * 
	 */
	private $statisTime;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getProfitValue() {
		return $this->profitValue;
	}
	
	public function setProfitValue($profitValue) {
		$this->profitValue = $profitValue;
		$this->apiParams["profitValue"] = $profitValue;
	}
	
	public function getActionType() {
		return $this->actionType;
	}
	
	public function setActionType($actionType) {
		$this->actionType = $actionType;
		$this->apiParams["actionType"] = $actionType;
	}
	
	public function getStatisTime() {
		return $this->statisTime;
	}
	
	public function setStatisTime($statisTime) {
		$this->statisTime = $statisTime;
		$this->apiParams["statisTime"] = $statisTime;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.actioneffect.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->actionType, 'actionType');
		RequestCheckUtil::checkNotNull($this->statisTime, 'statisTime');
	}
	
	public function getBizName(){
		return "addActioneffect";
	}
	
}

?>