<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-10
 */
class BtcorderrefundReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btcorderrefund.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "receiveBtcorderrefund";
	}
	
}

?>