<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-14
 */
class InteractstoreeffectQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.interactstoreeffect.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
	}
	
	public function getBizName(){
		return "queryInteractstoreeffect";
	}
	
}

?>