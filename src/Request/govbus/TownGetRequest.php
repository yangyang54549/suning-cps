<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-2
 */
class TownGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $transportCode;
	
	public function getTransportCode() {
		return $this->transportCode;
	}
	
	public function setTransportCode($transportCode) {
		$this->transportCode = $transportCode;
		$this->apiParams["transportCode"] = $transportCode;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.town.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->transportCode, 'transportCode');
	}
	
	public function getBizName(){
		return "getTown";
	}
	
}

?>