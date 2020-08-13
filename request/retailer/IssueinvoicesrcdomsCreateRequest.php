<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class IssueinvoicesrcdomsCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $invoiceIssueReqDTO;
	
	/**
	 * 
	 */
	private $respList;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getInvoiceIssueReqDTO() {
		return $this->invoiceIssueReqDTO;
	}
	
	public function setInvoiceIssueReqDTO($invoiceIssueReqDTO) {
		$this->invoiceIssueReqDTO = $invoiceIssueReqDTO;
		$this->apiParams["invoiceIssueReqDTO"] = $invoiceIssueReqDTO->getApiParams();
	}
	
	public function getRespList() {
		return $this->respList;
	}
	
	public function setRespList($respList) {
		$this->respList = $respList;
		$arr = array();
		foreach ($respList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["respList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.issueinvoicesrcdoms.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "createIssueinvoicesrcdoms";
	}
	
}

class InvoiceIssueReqDTO {

	private $apiParams = array();
	
	private $cityCode;
	
	private $companyName;
	
	private $districtCode;
	
	private $invoiceTitle;
	
	private $invoiceType;
	
	private $provCode;
	
	private $receiveAddr;
	
	private $receiveName;
	
	private $receiveTel;
	
	private $regAccount;
	
	private $regAddr;
	
	private $regBank;
	
	private $regTel;
	
	private $snCustNum;
	
	private $taxNo;
	
	private $townCode;
	
	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCompanyName() {
		return $this->companyName;
	}

	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->apiParams["companyName"] = $companyName;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}

	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getInvoiceTitle() {
		return $this->invoiceTitle;
	}

	public function setInvoiceTitle($invoiceTitle) {
		$this->invoiceTitle = $invoiceTitle;
		$this->apiParams["invoiceTitle"] = $invoiceTitle;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getProvCode() {
		return $this->provCode;
	}

	public function setProvCode($provCode) {
		$this->provCode = $provCode;
		$this->apiParams["provCode"] = $provCode;
	}
	
	public function getReceiveAddr() {
		return $this->receiveAddr;
	}

	public function setReceiveAddr($receiveAddr) {
		$this->receiveAddr = $receiveAddr;
		$this->apiParams["receiveAddr"] = $receiveAddr;
	}
	
	public function getReceiveName() {
		return $this->receiveName;
	}

	public function setReceiveName($receiveName) {
		$this->receiveName = $receiveName;
		$this->apiParams["receiveName"] = $receiveName;
	}
	
	public function getReceiveTel() {
		return $this->receiveTel;
	}

	public function setReceiveTel($receiveTel) {
		$this->receiveTel = $receiveTel;
		$this->apiParams["receiveTel"] = $receiveTel;
	}
	
	public function getRegAccount() {
		return $this->regAccount;
	}

	public function setRegAccount($regAccount) {
		$this->regAccount = $regAccount;
		$this->apiParams["regAccount"] = $regAccount;
	}
	
	public function getRegAddr() {
		return $this->regAddr;
	}

	public function setRegAddr($regAddr) {
		$this->regAddr = $regAddr;
		$this->apiParams["regAddr"] = $regAddr;
	}
	
	public function getRegBank() {
		return $this->regBank;
	}

	public function setRegBank($regBank) {
		$this->regBank = $regBank;
		$this->apiParams["regBank"] = $regBank;
	}
	
	public function getRegTel() {
		return $this->regTel;
	}

	public function setRegTel($regTel) {
		$this->regTel = $regTel;
		$this->apiParams["regTel"] = $regTel;
	}
	
	public function getSnCustNum() {
		return $this->snCustNum;
	}

	public function setSnCustNum($snCustNum) {
		$this->snCustNum = $snCustNum;
		$this->apiParams["snCustNum"] = $snCustNum;
	}
	
	public function getTaxNo() {
		return $this->taxNo;
	}

	public function setTaxNo($taxNo) {
		$this->taxNo = $taxNo;
		$this->apiParams["taxNo"] = $taxNo;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}

	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class RespList {

	private $apiParams = array();
	
	private $omsOrderItemNo;
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}

	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>