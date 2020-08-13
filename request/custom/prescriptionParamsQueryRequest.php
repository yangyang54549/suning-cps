<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-5
 */
class prescriptionParamsQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderInfo;
	
	/**
	 * 
	 */
	private $supplierInfo;
	
	public function getOrderInfo() {
		return $this->orderInfo;
	}
	
	public function setOrderInfo($orderInfo) {
		$this->orderInfo = $orderInfo;
		$this->apiParams["orderInfo"] = $orderInfo->getApiParams();
	}
	
	public function getSupplierInfo() {
		return $this->supplierInfo;
	}
	
	public function setSupplierInfo($supplierInfo) {
		$this->supplierInfo = $supplierInfo;
		$this->apiParams["supplierInfo"] = $supplierInfo->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.custom.prescriptionorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "prescriptionParams";
	}
	
}

class OrderInfo {

	private $apiParams = array();
	
	private $orderId;
	
	private $orderItemId;
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class SupplierInfo {

	private $apiParams = array();
	
	private $supplierCode;
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>