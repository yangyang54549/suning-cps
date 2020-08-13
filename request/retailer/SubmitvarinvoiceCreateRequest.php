<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class SubmitvarinvoiceCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $snCustNum;
	
	/**
	 * 
	 */
	private $submitFlag;
	
	/**
	 * 
	 */
	private $vatAddressInfoDTO;
	
	/**
	 * 
	 */
	private $vatInvoiceInfoDTO;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getSnCustNum() {
		return $this->snCustNum;
	}
	
	public function setSnCustNum($snCustNum) {
		$this->snCustNum = $snCustNum;
		$this->apiParams["snCustNum"] = $snCustNum;
	}
	
	public function getSubmitFlag() {
		return $this->submitFlag;
	}
	
	public function setSubmitFlag($submitFlag) {
		$this->submitFlag = $submitFlag;
		$this->apiParams["submitFlag"] = $submitFlag;
	}
	
	public function getVatAddressInfoDTO() {
		return $this->vatAddressInfoDTO;
	}
	
	public function setVatAddressInfoDTO($vatAddressInfoDTO) {
		$this->vatAddressInfoDTO = $vatAddressInfoDTO;
		$this->apiParams["vatAddressInfoDTO"] = $vatAddressInfoDTO->getApiParams();
	}
	
	public function getVatInvoiceInfoDTO() {
		return $this->vatInvoiceInfoDTO;
	}
	
	public function setVatInvoiceInfoDTO($vatInvoiceInfoDTO) {
		$this->vatInvoiceInfoDTO = $vatInvoiceInfoDTO;
		$this->apiParams["vatInvoiceInfoDTO"] = $vatInvoiceInfoDTO->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.submitvarinvoice.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "createSubmitvarinvoice";
	}
	
}

class VatInvoiceInfoDTO {

	private $apiParams = array();
	
	private $bankAcctPermitId;
	
	private $bankDepositAcnt;
	
	private $bankName;
	
	private $certNo;
	
	private $certType;
	
	private $orgAddr;
	
	private $orgName;
	
	private $orgTel;
	
	private $taxPayerCertId;
	
	private $taxRegCertId;
	
	private $vatConsignId;
	
	private $vatQlfctStat;
	
	private $vatQlfctStatUpdRsn;
	
	private $vatQlfctStatUpdTm;
	
	public function getBankAcctPermitId() {
		return $this->bankAcctPermitId;
	}

	public function setBankAcctPermitId($bankAcctPermitId) {
		$this->bankAcctPermitId = $bankAcctPermitId;
		$this->apiParams["bankAcctPermitId"] = $bankAcctPermitId;
	}
	
	public function getBankDepositAcnt() {
		return $this->bankDepositAcnt;
	}

	public function setBankDepositAcnt($bankDepositAcnt) {
		$this->bankDepositAcnt = $bankDepositAcnt;
		$this->apiParams["bankDepositAcnt"] = $bankDepositAcnt;
	}
	
	public function getBankName() {
		return $this->bankName;
	}

	public function setBankName($bankName) {
		$this->bankName = $bankName;
		$this->apiParams["bankName"] = $bankName;
	}
	
	public function getCertNo() {
		return $this->certNo;
	}

	public function setCertNo($certNo) {
		$this->certNo = $certNo;
		$this->apiParams["certNo"] = $certNo;
	}
	
	public function getCertType() {
		return $this->certType;
	}

	public function setCertType($certType) {
		$this->certType = $certType;
		$this->apiParams["certType"] = $certType;
	}
	
	public function getOrgAddr() {
		return $this->orgAddr;
	}

	public function setOrgAddr($orgAddr) {
		$this->orgAddr = $orgAddr;
		$this->apiParams["orgAddr"] = $orgAddr;
	}
	
	public function getOrgName() {
		return $this->orgName;
	}

	public function setOrgName($orgName) {
		$this->orgName = $orgName;
		$this->apiParams["orgName"] = $orgName;
	}
	
	public function getOrgTel() {
		return $this->orgTel;
	}

	public function setOrgTel($orgTel) {
		$this->orgTel = $orgTel;
		$this->apiParams["orgTel"] = $orgTel;
	}
	
	public function getTaxPayerCertId() {
		return $this->taxPayerCertId;
	}

	public function setTaxPayerCertId($taxPayerCertId) {
		$this->taxPayerCertId = $taxPayerCertId;
		$this->apiParams["taxPayerCertId"] = $taxPayerCertId;
	}
	
	public function getTaxRegCertId() {
		return $this->taxRegCertId;
	}

	public function setTaxRegCertId($taxRegCertId) {
		$this->taxRegCertId = $taxRegCertId;
		$this->apiParams["taxRegCertId"] = $taxRegCertId;
	}
	
	public function getVatConsignId() {
		return $this->vatConsignId;
	}

	public function setVatConsignId($vatConsignId) {
		$this->vatConsignId = $vatConsignId;
		$this->apiParams["vatConsignId"] = $vatConsignId;
	}
	
	public function getVatQlfctStat() {
		return $this->vatQlfctStat;
	}

	public function setVatQlfctStat($vatQlfctStat) {
		$this->vatQlfctStat = $vatQlfctStat;
		$this->apiParams["vatQlfctStat"] = $vatQlfctStat;
	}
	
	public function getVatQlfctStatUpdRsn() {
		return $this->vatQlfctStatUpdRsn;
	}

	public function setVatQlfctStatUpdRsn($vatQlfctStatUpdRsn) {
		$this->vatQlfctStatUpdRsn = $vatQlfctStatUpdRsn;
		$this->apiParams["vatQlfctStatUpdRsn"] = $vatQlfctStatUpdRsn;
	}
	
	public function getVatQlfctStatUpdTm() {
		return $this->vatQlfctStatUpdTm;
	}

	public function setVatQlfctStatUpdTm($vatQlfctStatUpdTm) {
		$this->vatQlfctStatUpdTm = $vatQlfctStatUpdTm;
		$this->apiParams["vatQlfctStatUpdTm"] = $vatQlfctStatUpdTm;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class VatAddressInfoDTO {

	private $apiParams = array();
	
	private $additionalFour;
	
	private $additionalOne;
	
	private $additionalThree;
	
	private $additionalTwo;
	
	private $addrNum;
	
	private $addrType;
	
	private $city;
	
	private $cntctPointName;
	
	private $country;
	
	private $createTime;
	
	private $detailAddress;
	
	private $mobileNumOne;
	
	private $mobileNumTwo;
	
	private $postCode;
	
	private $preferFlag;
	
	private $state;
	
	private $street;
	
	private $teleAreaCode;
	
	private $teleCntryCode;
	
	private $teleExtn;
	
	private $teleNum;
	
	private $town;
	
	private $updateTime;
	
	public function getAdditionalFour() {
		return $this->additionalFour;
	}

	public function setAdditionalFour($additionalFour) {
		$this->additionalFour = $additionalFour;
		$this->apiParams["additionalFour"] = $additionalFour;
	}
	
	public function getAdditionalOne() {
		return $this->additionalOne;
	}

	public function setAdditionalOne($additionalOne) {
		$this->additionalOne = $additionalOne;
		$this->apiParams["additionalOne"] = $additionalOne;
	}
	
	public function getAdditionalThree() {
		return $this->additionalThree;
	}

	public function setAdditionalThree($additionalThree) {
		$this->additionalThree = $additionalThree;
		$this->apiParams["additionalThree"] = $additionalThree;
	}
	
	public function getAdditionalTwo() {
		return $this->additionalTwo;
	}

	public function setAdditionalTwo($additionalTwo) {
		$this->additionalTwo = $additionalTwo;
		$this->apiParams["additionalTwo"] = $additionalTwo;
	}
	
	public function getAddrNum() {
		return $this->addrNum;
	}

	public function setAddrNum($addrNum) {
		$this->addrNum = $addrNum;
		$this->apiParams["addrNum"] = $addrNum;
	}
	
	public function getAddrType() {
		return $this->addrType;
	}

	public function setAddrType($addrType) {
		$this->addrType = $addrType;
		$this->apiParams["addrType"] = $addrType;
	}
	
	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCntctPointName() {
		return $this->cntctPointName;
	}

	public function setCntctPointName($cntctPointName) {
		$this->cntctPointName = $cntctPointName;
		$this->apiParams["cntctPointName"] = $cntctPointName;
	}
	
	public function getCountry() {
		return $this->country;
	}

	public function setCountry($country) {
		$this->country = $country;
		$this->apiParams["country"] = $country;
	}
	
	public function getCreateTime() {
		return $this->createTime;
	}

	public function setCreateTime($createTime) {
		$this->createTime = $createTime;
		$this->apiParams["createTime"] = $createTime;
	}
	
	public function getDetailAddress() {
		return $this->detailAddress;
	}

	public function setDetailAddress($detailAddress) {
		$this->detailAddress = $detailAddress;
		$this->apiParams["detailAddress"] = $detailAddress;
	}
	
	public function getMobileNumOne() {
		return $this->mobileNumOne;
	}

	public function setMobileNumOne($mobileNumOne) {
		$this->mobileNumOne = $mobileNumOne;
		$this->apiParams["mobileNumOne"] = $mobileNumOne;
	}
	
	public function getMobileNumTwo() {
		return $this->mobileNumTwo;
	}

	public function setMobileNumTwo($mobileNumTwo) {
		$this->mobileNumTwo = $mobileNumTwo;
		$this->apiParams["mobileNumTwo"] = $mobileNumTwo;
	}
	
	public function getPostCode() {
		return $this->postCode;
	}

	public function setPostCode($postCode) {
		$this->postCode = $postCode;
		$this->apiParams["postCode"] = $postCode;
	}
	
	public function getPreferFlag() {
		return $this->preferFlag;
	}

	public function setPreferFlag($preferFlag) {
		$this->preferFlag = $preferFlag;
		$this->apiParams["preferFlag"] = $preferFlag;
	}
	
	public function getState() {
		return $this->state;
	}

	public function setState($state) {
		$this->state = $state;
		$this->apiParams["state"] = $state;
	}
	
	public function getStreet() {
		return $this->street;
	}

	public function setStreet($street) {
		$this->street = $street;
		$this->apiParams["street"] = $street;
	}
	
	public function getTeleAreaCode() {
		return $this->teleAreaCode;
	}

	public function setTeleAreaCode($teleAreaCode) {
		$this->teleAreaCode = $teleAreaCode;
		$this->apiParams["teleAreaCode"] = $teleAreaCode;
	}
	
	public function getTeleCntryCode() {
		return $this->teleCntryCode;
	}

	public function setTeleCntryCode($teleCntryCode) {
		$this->teleCntryCode = $teleCntryCode;
		$this->apiParams["teleCntryCode"] = $teleCntryCode;
	}
	
	public function getTeleExtn() {
		return $this->teleExtn;
	}

	public function setTeleExtn($teleExtn) {
		$this->teleExtn = $teleExtn;
		$this->apiParams["teleExtn"] = $teleExtn;
	}
	
	public function getTeleNum() {
		return $this->teleNum;
	}

	public function setTeleNum($teleNum) {
		$this->teleNum = $teleNum;
		$this->apiParams["teleNum"] = $teleNum;
	}
	
	public function getTown() {
		return $this->town;
	}

	public function setTown($town) {
		$this->town = $town;
		$this->apiParams["town"] = $town;
	}
	
	public function getUpdateTime() {
		return $this->updateTime;
	}

	public function setUpdateTime($updateTime) {
		$this->updateTime = $updateTime;
		$this->apiParams["updateTime"] = $updateTime;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>