<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-6
 */
class FulladdressGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.sngoods.fulladdress.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getFulladdress";
	}
	
}

?>