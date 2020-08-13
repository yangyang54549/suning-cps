<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-4
 */
class WeiboproductinfoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $detailUrl;
	
	/**
	 * 
	 */
	private $subUser;
	
	public function getDetailUrl() {
		return $this->detailUrl;
	}
	
	public function setDetailUrl($detailUrl) {
		$this->detailUrl = $detailUrl;
		$this->apiParams["detailUrl"] = $detailUrl;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.weiboproductinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->detailUrl, 'detailUrl');
	}
	
	public function getBizName(){
		return "getWeiboproductinfo";
	}
	
}

?>