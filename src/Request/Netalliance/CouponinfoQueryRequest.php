<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-15
 */
class CouponinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $couponNum;
	
	/**
	 * 
	 */
	private $quanUrl;
	
	public function getCouponNum() {
		return $this->couponNum;
	}
	
	public function setCouponNum($couponNum) {
		$this->couponNum = $couponNum;
		$this->apiParams["couponNum"] = $couponNum;
	}
	
	public function getQuanUrl() {
		return $this->quanUrl;
	}
	
	public function setQuanUrl($quanUrl) {
		$this->quanUrl = $quanUrl;
		$this->apiParams["quanUrl"] = $quanUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.couponinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->quanUrl, 'quanUrl');
	}
	
	public function getBizName(){
		return "queryCouponinfo";
	}
	
}

?>