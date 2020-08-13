<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-5
 */
class PrescriptionConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $msg;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $picUrl;
	
	/**
	 * 
	 */
	private $reviewResult;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getMsg() {
		return $this->msg;
	}
	
	public function setMsg($msg) {
		$this->msg = $msg;
		$this->apiParams["msg"] = $msg;
	}
	
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
	
	public function getPicUrl() {
		return $this->picUrl;
	}
	
	public function setPicUrl($picUrl) {
		$this->picUrl = $picUrl;
		$this->apiParams["picUrl"] = $picUrl;
	}
	
	public function getReviewResult() {
		return $this->reviewResult;
	}
	
	public function setReviewResult($reviewResult) {
		$this->reviewResult = $reviewResult;
		$this->apiParams["reviewResult"] = $reviewResult;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.prescription.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->reviewResult, 'reviewResult');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "confirmPrescription";
	}
	
}

?>