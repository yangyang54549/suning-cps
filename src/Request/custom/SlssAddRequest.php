<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-11
 */
class SlssAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $bizCode;
	
	/**
	 * 
	 */
	private $longUrl;
	
	public function getBizCode() {
		return $this->bizCode;
	}
	
	public function setBizCode($bizCode) {
		$this->bizCode = $bizCode;
		$this->apiParams["bizCode"] = $bizCode;
	}
	
	public function getLongUrl() {
		return $this->longUrl;
	}
	
	public function setLongUrl($longUrl) {
		$this->longUrl = $longUrl;
		$this->apiParams["longUrl"] = $longUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.slss.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->bizCode, 'bizCode');
		RequestCheckUtil::checkNotNull($this->longUrl, 'longUrl');
	}
	
	public function getBizName(){
		return "addSlss";
	}
	
}

?>