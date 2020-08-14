<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class InvoicerecorddetailQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $omsOrderItemNo;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}
	
	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.invoicerecorddetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryInvoicerecorddetail";
	}
	
}

?>