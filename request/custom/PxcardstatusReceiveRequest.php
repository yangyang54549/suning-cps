<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-26
 */
class PxcardstatusReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $address;
	
	/**
	 * 
	 */
	private $deliveryDate;
	
	/**
	 * 
	 */
	private $expressCompanyCode;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $phoneNum;
	
	/**
	 * 
	 */
	private $pickupMode;
	
	/**
	 * 
	 */
	private $pxCardId;
	
	/**
	 * 
	 */
	private $pxCardNo;
	
	/**
	 * 
	 */
	private $pxCardStatus;
	
	public function getAddress() {
		return $this->address;
	}
	
	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getDeliveryDate() {
		return $this->deliveryDate;
	}
	
	public function setDeliveryDate($deliveryDate) {
		$this->deliveryDate = $deliveryDate;
		$this->apiParams["deliveryDate"] = $deliveryDate;
	}
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}
	
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getPickupMode() {
		return $this->pickupMode;
	}
	
	public function setPickupMode($pickupMode) {
		$this->pickupMode = $pickupMode;
		$this->apiParams["pickupMode"] = $pickupMode;
	}
	
	public function getPxCardId() {
		return $this->pxCardId;
	}
	
	public function setPxCardId($pxCardId) {
		$this->pxCardId = $pxCardId;
		$this->apiParams["pxCardId"] = $pxCardId;
	}
	
	public function getPxCardNo() {
		return $this->pxCardNo;
	}
	
	public function setPxCardNo($pxCardNo) {
		$this->pxCardNo = $pxCardNo;
		$this->apiParams["pxCardNo"] = $pxCardNo;
	}
	
	public function getPxCardStatus() {
		return $this->pxCardStatus;
	}
	
	public function setPxCardStatus($pxCardStatus) {
		$this->pxCardStatus = $pxCardStatus;
		$this->apiParams["pxCardStatus"] = $pxCardStatus;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.pxcardstatus.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->pickupMode, 'pickupMode');
		RequestCheckUtil::checkNotNull($this->pxCardId, 'pxCardId');
		RequestCheckUtil::checkNotNull($this->pxCardNo, 'pxCardNo');
		RequestCheckUtil::checkNotNull($this->pxCardStatus, 'pxCardStatus');
	}
	
	public function getBizName(){
		return "receivePxcardstatus";
	}
	
}

?>