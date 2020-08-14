<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class MerchantinvoicereceiverGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $merchantCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getMerchantCode() {
		return $this->merchantCode;
	}
	
	public function setMerchantCode($merchantCode) {
		$this->merchantCode = $merchantCode;
		$this->apiParams["merchantCode"] = $merchantCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.merchantinvoicereceiver.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "getMerchantinvoicereceiver";
	}
	
}

?>