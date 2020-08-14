<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-16
 */
class invaddressQueryRequest  extends SelectSuningRequest{
	
	
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.invaddress.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "invaddress";
	}
	
}

?>