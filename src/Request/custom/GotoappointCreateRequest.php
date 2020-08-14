<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-24
 */
class GotoappointCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionId;
	
	/**
	 * 
	 */
	private $custNo;
	
	/**
	 * 
	 */
	private $partNumber;
	
	/**
	 * 
	 */
	private $purchaseType;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $telNo;
	
	/**
	 * 
	 */
	private $terminalFlag;
	
	/**
	 * 
	 */
	private $vendorCode;
	
	public function getActionId() {
		return $this->actionId;
	}
	
	public function setActionId($actionId) {
		$this->actionId = $actionId;
		$this->apiParams["actionId"] = $actionId;
	}
	
	public function getCustNo() {
		return $this->custNo;
	}
	
	public function setCustNo($custNo) {
		$this->custNo = $custNo;
		$this->apiParams["custNo"] = $custNo;
	}
	
	public function getPartNumber() {
		return $this->partNumber;
	}
	
	public function setPartNumber($partNumber) {
		$this->partNumber = $partNumber;
		$this->apiParams["partNumber"] = $partNumber;
	}
	
	public function getPurchaseType() {
		return $this->purchaseType;
	}
	
	public function setPurchaseType($purchaseType) {
		$this->purchaseType = $purchaseType;
		$this->apiParams["purchaseType"] = $purchaseType;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getTelNo() {
		return $this->telNo;
	}
	
	public function setTelNo($telNo) {
		$this->telNo = $telNo;
		$this->apiParams["telNo"] = $telNo;
	}
	
	public function getTerminalFlag() {
		return $this->terminalFlag;
	}
	
	public function setTerminalFlag($terminalFlag) {
		$this->terminalFlag = $terminalFlag;
		$this->apiParams["terminalFlag"] = $terminalFlag;
	}
	
	public function getVendorCode() {
		return $this->vendorCode;
	}
	
	public function setVendorCode($vendorCode) {
		$this->vendorCode = $vendorCode;
		$this->apiParams["vendorCode"] = $vendorCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.gotoappoint.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionId, 'actionId');
		RequestCheckUtil::checkNotNull($this->custNo, 'custNo');
		RequestCheckUtil::checkNotNull($this->partNumber, 'partNumber');
		RequestCheckUtil::checkNotNull($this->purchaseType, 'purchaseType');
		RequestCheckUtil::checkNotNull($this->telNo, 'telNo');
		RequestCheckUtil::checkNotNull($this->terminalFlag, 'terminalFlag');
		RequestCheckUtil::checkNotNull($this->vendorCode, 'vendorCode');
	}
	
	public function getBizName(){
		return "createGotoappoint";
	}
	
}

?>