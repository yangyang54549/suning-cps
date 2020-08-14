<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-2
 */
class ReturnpartorderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $aftersaleAddress;
	
	/**
	 * 
	 */
	private $aftersaleName;
	
	/**
	 * 
	 */
	private $aftersalePhone;
	
	/**
	 * 
	 */
	private $bankName;
	
	/**
	 * 
	 */
	private $cardNumber;
	
	/**
	 * 
	 */
	private $cardUsername;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $skus;
	
	public function getAftersaleAddress() {
		return $this->aftersaleAddress;
	}
	
	public function setAftersaleAddress($aftersaleAddress) {
		$this->aftersaleAddress = $aftersaleAddress;
		$this->apiParams["aftersaleAddress"] = $aftersaleAddress->getApiParams();
	}
	
	public function getAftersaleName() {
		return $this->aftersaleName;
	}
	
	public function setAftersaleName($aftersaleName) {
		$this->aftersaleName = $aftersaleName;
		$this->apiParams["aftersaleName"] = $aftersaleName;
	}
	
	public function getAftersalePhone() {
		return $this->aftersalePhone;
	}
	
	public function setAftersalePhone($aftersalePhone) {
		$this->aftersalePhone = $aftersalePhone;
		$this->apiParams["aftersalePhone"] = $aftersalePhone;
	}
	
	public function getBankName() {
		return $this->bankName;
	}
	
	public function setBankName($bankName) {
		$this->bankName = $bankName;
		$this->apiParams["bankName"] = $bankName;
	}
	
	public function getCardNumber() {
		return $this->cardNumber;
	}
	
	public function setCardNumber($cardNumber) {
		$this->cardNumber = $cardNumber;
		$this->apiParams["cardNumber"] = $cardNumber;
	}
	
	public function getCardUsername() {
		return $this->cardUsername;
	}
	
	public function setCardUsername($cardUsername) {
		$this->cardUsername = $cardUsername;
		$this->apiParams["cardUsername"] = $cardUsername;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getSkus() {
		return $this->skus;
	}
	
	public function setSkus($skus) {
		$this->skus = $skus;
		$arr = array();
		foreach ($skus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skus"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.returnpartorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "addReturnpartorder";
	}
	
}

class AftersaleAddress {

	private $apiParams = array();
	
	private $address;
	
	private $cityId;
	
	private $countyId;
	
	private $provinceId;
	
	private $townId;
	
	public function getAddress() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
		$this->apiParams["address"] = $address;
	}
	
	public function getCityId() {
		return $this->cityId;
	}

	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getCountyId() {
		return $this->countyId;
	}

	public function setCountyId($countyId) {
		$this->countyId = $countyId;
		$this->apiParams["countyId"] = $countyId;
	}
	
	public function getProvinceId() {
		return $this->provinceId;
	}

	public function setProvinceId($provinceId) {
		$this->provinceId = $provinceId;
		$this->apiParams["provinceId"] = $provinceId;
	}
	
	public function getTownId() {
		return $this->townId;
	}

	public function setTownId($townId) {
		$this->townId = $townId;
		$this->apiParams["townId"] = $townId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Skus {

	private $apiParams = array();
	
	private $num;
	
	private $reason;
	
	private $reasonDetails;
	
	private $skuId;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getReason() {
		return $this->reason;
	}

	public function setReason($reason) {
		$this->reason = $reason;
		$this->apiParams["reason"] = $reason;
	}
	
	public function getReasonDetails() {
		return $this->reasonDetails;
	}

	public function setReasonDetails($reasonDetails) {
		$this->reasonDetails = $reasonDetails;
		$this->apiParams["reasonDetails"] = $reasonDetails;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>