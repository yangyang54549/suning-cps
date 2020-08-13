<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class VatinvoiceinfoformaGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $snCustNum;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getSnCustNum() {
		return $this->snCustNum;
	}
	
	public function setSnCustNum($snCustNum) {
		$this->snCustNum = $snCustNum;
		$this->apiParams["snCustNum"] = $snCustNum;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.vatinvoiceinfoforma.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "getVatinvoiceinfoforma";
	}
	
}

?>