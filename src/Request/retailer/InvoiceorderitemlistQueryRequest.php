<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-30
 */
class InvoiceorderitemlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $invoiceOrderItemQueryReqDto;
	
	/**
	 * 
	 */
	private $queryParam;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getInvoiceOrderItemQueryReqDto() {
		return $this->invoiceOrderItemQueryReqDto;
	}
	
	public function setInvoiceOrderItemQueryReqDto($invoiceOrderItemQueryReqDto) {
		$this->invoiceOrderItemQueryReqDto = $invoiceOrderItemQueryReqDto;
		$this->apiParams["invoiceOrderItemQueryReqDto"] = $invoiceOrderItemQueryReqDto->getApiParams();
	}
	
	public function getQueryParam() {
		return $this->queryParam;
	}
	
	public function setQueryParam($queryParam) {
		$this->queryParam = $queryParam;
		$this->apiParams["queryParam"] = $queryParam->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.invoiceorderitemlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryInvoiceorderitemlist";
	}
	
}

class InvoiceOrderItemQueryReqDto {

	private $apiParams = array();
	
	private $btcOrderId;
	
	private $cmmdtyCode;
	
	private $cmmdtyName;
	
	private $creator;
	
	private $endTime;
	
	private $linkerMobile;
	
	private $omsOrderId;
	
	private $omsOrderItemId;
	
	private $orderId;
	
	private $platformCode;
	
	private $snCustNum;
	
	private $startTime;
	
	private $submitTypeInvoice;
	
	public function getBtcOrderId() {
		return $this->btcOrderId;
	}

	public function setBtcOrderId($btcOrderId) {
		$this->btcOrderId = $btcOrderId;
		$this->apiParams["btcOrderId"] = $btcOrderId;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}

	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
	}
	
	public function getCreator() {
		return $this->creator;
	}

	public function setCreator($creator) {
		$this->creator = $creator;
		$this->apiParams["creator"] = $creator;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getLinkerMobile() {
		return $this->linkerMobile;
	}

	public function setLinkerMobile($linkerMobile) {
		$this->linkerMobile = $linkerMobile;
		$this->apiParams["linkerMobile"] = $linkerMobile;
	}
	
	public function getOmsOrderId() {
		return $this->omsOrderId;
	}

	public function setOmsOrderId($omsOrderId) {
		$this->omsOrderId = $omsOrderId;
		$this->apiParams["omsOrderId"] = $omsOrderId;
	}
	
	public function getOmsOrderItemId() {
		return $this->omsOrderItemId;
	}

	public function setOmsOrderItemId($omsOrderItemId) {
		$this->omsOrderItemId = $omsOrderItemId;
		$this->apiParams["omsOrderItemId"] = $omsOrderItemId;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getPlatformCode() {
		return $this->platformCode;
	}

	public function setPlatformCode($platformCode) {
		$this->platformCode = $platformCode;
		$this->apiParams["platformCode"] = $platformCode;
	}
	
	public function getSnCustNum() {
		return $this->snCustNum;
	}

	public function setSnCustNum($snCustNum) {
		$this->snCustNum = $snCustNum;
		$this->apiParams["snCustNum"] = $snCustNum;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getSubmitTypeInvoice() {
		return $this->submitTypeInvoice;
	}

	public function setSubmitTypeInvoice($submitTypeInvoice) {
		$this->submitTypeInvoice = $submitTypeInvoice;
		$this->apiParams["submitTypeInvoice"] = $submitTypeInvoice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class QueryParam {

	private $apiParams = array();
	
	private $corderBy;
	
	private $pnumber;
	
	private $psize;
	
	public function getCorderBy() {
		return $this->corderBy;
	}

	public function setCorderBy($corderBy) {
		$this->corderBy = $corderBy;
		$this->apiParams["corderBy"] = $corderBy;
	}
	
	public function getPnumber() {
		return $this->pnumber;
	}

	public function setPnumber($pnumber) {
		$this->pnumber = $pnumber;
		$this->apiParams["pnumber"] = $pnumber;
	}
	
	public function getPsize() {
		return $this->psize;
	}

	public function setPsize($psize) {
		$this->psize = $psize;
		$this->apiParams["psize"] = $psize;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>