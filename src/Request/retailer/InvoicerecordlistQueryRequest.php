<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class InvoicerecordlistQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $invoiceRecordListReqDto;
	
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
	
	public function getInvoiceRecordListReqDto() {
		return $this->invoiceRecordListReqDto;
	}
	
	public function setInvoiceRecordListReqDto($invoiceRecordListReqDto) {
		$this->invoiceRecordListReqDto = $invoiceRecordListReqDto;
		$this->apiParams["invoiceRecordListReqDto"] = $invoiceRecordListReqDto->getApiParams();
	}
	
	public function getQueryParam() {
		return $this->queryParam;
	}
	
	public function setQueryParam($queryParam) {
		$this->queryParam = $queryParam;
		$this->apiParams["queryParam"] = $queryParam->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.invoicerecordlist.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryInvoicerecordlist";
	}
	
}

class InvoiceRecordListReqDto {

	private $apiParams = array();
	
	private $btcOrderId;
	
	private $cmmdtyCode;
	
	private $cmmdtyName;
	
	private $creator;
	
	private $endCreateOrderTime;
	
	private $endDate;
	
	private $invoiceType;
	
	private $linkerMobile;
	
	private $merchantCustNo;
	
	private $omsOrderId;
	
	private $omsOrderItemId;
	
	private $orderId;
	
	private $platformCode;
	
	private $startCreateOrderTime;
	
	private $startDate;
	
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
	
	public function getEndCreateOrderTime() {
		return $this->endCreateOrderTime;
	}

	public function setEndCreateOrderTime($endCreateOrderTime) {
		$this->endCreateOrderTime = $endCreateOrderTime;
		$this->apiParams["endCreateOrderTime"] = $endCreateOrderTime;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}

	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getLinkerMobile() {
		return $this->linkerMobile;
	}

	public function setLinkerMobile($linkerMobile) {
		$this->linkerMobile = $linkerMobile;
		$this->apiParams["linkerMobile"] = $linkerMobile;
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}

	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
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
	
	public function getStartCreateOrderTime() {
		return $this->startCreateOrderTime;
	}

	public function setStartCreateOrderTime($startCreateOrderTime) {
		$this->startCreateOrderTime = $startCreateOrderTime;
		$this->apiParams["startCreateOrderTime"] = $startCreateOrderTime;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}

	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
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