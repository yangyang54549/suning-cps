<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-31
 */
class InvoicedetailitemlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $invoiceType;
	
	/**
	 * 
	 */
	private $omsOrderNos;
	
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
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}
	
	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getOmsOrderNos() {
		return $this->omsOrderNos;
	}
	
	public function setOmsOrderNos($omsOrderNos) {
		$this->omsOrderNos = $omsOrderNos;
		$arr = array();
		foreach ($omsOrderNos as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["omsOrderNos"] = $arr;
	}
	
	public function getSnCustNum() {
		return $this->snCustNum;
	}
	
	public function setSnCustNum($snCustNum) {
		$this->snCustNum = $snCustNum;
		$this->apiParams["snCustNum"] = $snCustNum;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.invoicedetailitemlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryInvoicedetailitemlist";
	}
	
}

class OmsOrderNos {

	private $apiParams = array();
	
	private $omsOrderNo;
	
	public function getOmsOrderNo() {
		return $this->omsOrderNo;
	}

	public function setOmsOrderNo($omsOrderNo) {
		$this->omsOrderNo = $omsOrderNo;
		$this->apiParams["omsOrderNo"] = $omsOrderNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>