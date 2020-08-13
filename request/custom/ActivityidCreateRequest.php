<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-3
 */
class ActivityidCreateRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.activityid.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "createActivityid";
	}
	
}

?>