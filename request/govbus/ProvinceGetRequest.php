<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-2
 */
class ProvinceGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.govbus.province.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getProvince";
	}
	
}

?>