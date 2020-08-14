<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class InitmerchantstoreCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $coperator;
	
	/**
	 * 
	 */
	private $dyttInitMerchantInfoDTO;
	
	/**
	 * 
	 */
	private $dyttInitSotreInfoDTO;
	
	/**
	 * 
	 */
	private $operType;
	
	/**
	 * 
	 */
	private $platformCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCoperator() {
		return $this->coperator;
	}
	
	public function setCoperator($coperator) {
		$this->coperator = $coperator;
		$this->apiParams["coperator"] = $coperator;
	}
	
	public function getDyttInitMerchantInfoDTO() {
		return $this->dyttInitMerchantInfoDTO;
	}
	
	public function setDyttInitMerchantInfoDTO($dyttInitMerchantInfoDTO) {
		$this->dyttInitMerchantInfoDTO = $dyttInitMerchantInfoDTO;
		$this->apiParams["dyttInitMerchantInfoDTO"] = $dyttInitMerchantInfoDTO->getApiParams();
	}
	
	public function getDyttInitSotreInfoDTO() {
		return $this->dyttInitSotreInfoDTO;
	}
	
	public function setDyttInitSotreInfoDTO($dyttInitSotreInfoDTO) {
		$this->dyttInitSotreInfoDTO = $dyttInitSotreInfoDTO;
		$this->apiParams["dyttInitSotreInfoDTO"] = $dyttInitSotreInfoDTO->getApiParams();
	}
	
	public function getOperType() {
		return $this->operType;
	}
	
	public function setOperType($operType) {
		$this->operType = $operType;
		$this->apiParams["operType"] = $operType;
	}
	
	public function getPlatformCode() {
		return $this->platformCode;
	}
	
	public function setPlatformCode($platformCode) {
		$this->platformCode = $platformCode;
		$this->apiParams["platformCode"] = $platformCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.initmerchantstore.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "createInitmerchantstore";
	}
	
}

class DyttInitMerchantInfoDTO {

	private $apiParams = array();
	
	private $acctNo;
	
	private $cityCode;
	
	private $cityName;
	
	private $companyAddr;
	
	private $companyName;
	
	private $companyType;
	
	private $districtCode;
	
	private $districtName;
	
	private $generalTaxpayerFlag;
	
	private $idcardFrontUrl;
	
	private $idcardReverseUrl;
	
	private $legalIdcardNo;
	
	private $legalPerson;
	
	private $licenseNo;
	
	private $licenseUrl;
	
	private $openingBankAccount;
	
	private $openingBankName;
	
	private $provCode;
	
	private $provName;
	
	private $registPhone;
	
	private $snCustNum;
	
	private $townCode;
	
	private $townName;
	
	public function getAcctNo() {
		return $this->acctNo;
	}

	public function setAcctNo($acctNo) {
		$this->acctNo = $acctNo;
		$this->apiParams["acctNo"] = $acctNo;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}

	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCityName() {
		return $this->cityName;
	}

	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getCompanyAddr() {
		return $this->companyAddr;
	}

	public function setCompanyAddr($companyAddr) {
		$this->companyAddr = $companyAddr;
		$this->apiParams["companyAddr"] = $companyAddr;
	}
	
	public function getCompanyName() {
		return $this->companyName;
	}

	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->apiParams["companyName"] = $companyName;
	}
	
	public function getCompanyType() {
		return $this->companyType;
	}

	public function setCompanyType($companyType) {
		$this->companyType = $companyType;
		$this->apiParams["companyType"] = $companyType;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}

	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getDistrictName() {
		return $this->districtName;
	}

	public function setDistrictName($districtName) {
		$this->districtName = $districtName;
		$this->apiParams["districtName"] = $districtName;
	}
	
	public function getGeneralTaxpayerFlag() {
		return $this->generalTaxpayerFlag;
	}

	public function setGeneralTaxpayerFlag($generalTaxpayerFlag) {
		$this->generalTaxpayerFlag = $generalTaxpayerFlag;
		$this->apiParams["generalTaxpayerFlag"] = $generalTaxpayerFlag;
	}
	
	public function getIdcardFrontUrl() {
		return $this->idcardFrontUrl;
	}

	public function setIdcardFrontUrl($idcardFrontUrl) {
		$this->idcardFrontUrl = $idcardFrontUrl;
		$this->apiParams["idcardFrontUrl"] = $idcardFrontUrl;
	}
	
	public function getIdcardReverseUrl() {
		return $this->idcardReverseUrl;
	}

	public function setIdcardReverseUrl($idcardReverseUrl) {
		$this->idcardReverseUrl = $idcardReverseUrl;
		$this->apiParams["idcardReverseUrl"] = $idcardReverseUrl;
	}
	
	public function getLegalIdcardNo() {
		return $this->legalIdcardNo;
	}

	public function setLegalIdcardNo($legalIdcardNo) {
		$this->legalIdcardNo = $legalIdcardNo;
		$this->apiParams["legalIdcardNo"] = $legalIdcardNo;
	}
	
	public function getLegalPerson() {
		return $this->legalPerson;
	}

	public function setLegalPerson($legalPerson) {
		$this->legalPerson = $legalPerson;
		$this->apiParams["legalPerson"] = $legalPerson;
	}
	
	public function getLicenseNo() {
		return $this->licenseNo;
	}

	public function setLicenseNo($licenseNo) {
		$this->licenseNo = $licenseNo;
		$this->apiParams["licenseNo"] = $licenseNo;
	}
	
	public function getLicenseUrl() {
		return $this->licenseUrl;
	}

	public function setLicenseUrl($licenseUrl) {
		$this->licenseUrl = $licenseUrl;
		$this->apiParams["licenseUrl"] = $licenseUrl;
	}
	
	public function getOpeningBankAccount() {
		return $this->openingBankAccount;
	}

	public function setOpeningBankAccount($openingBankAccount) {
		$this->openingBankAccount = $openingBankAccount;
		$this->apiParams["openingBankAccount"] = $openingBankAccount;
	}
	
	public function getOpeningBankName() {
		return $this->openingBankName;
	}

	public function setOpeningBankName($openingBankName) {
		$this->openingBankName = $openingBankName;
		$this->apiParams["openingBankName"] = $openingBankName;
	}
	
	public function getProvCode() {
		return $this->provCode;
	}

	public function setProvCode($provCode) {
		$this->provCode = $provCode;
		$this->apiParams["provCode"] = $provCode;
	}
	
	public function getProvName() {
		return $this->provName;
	}

	public function setProvName($provName) {
		$this->provName = $provName;
		$this->apiParams["provName"] = $provName;
	}
	
	public function getRegistPhone() {
		return $this->registPhone;
	}

	public function setRegistPhone($registPhone) {
		$this->registPhone = $registPhone;
		$this->apiParams["registPhone"] = $registPhone;
	}
	
	public function getSnCustNum() {
		return $this->snCustNum;
	}

	public function setSnCustNum($snCustNum) {
		$this->snCustNum = $snCustNum;
		$this->apiParams["snCustNum"] = $snCustNum;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}

	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getTownName() {
		return $this->townName;
	}

	public function setTownName($townName) {
		$this->townName = $townName;
		$this->apiParams["townName"] = $townName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class DyttInitSotreInfoDTO {

	private $apiParams = array();
	
	private $areaCode;
	
	private $businessType;
	
	private $companyCode;
	
	private $contactPerson;
	
	private $contactPhone;
	
	private $contractStartDate;
	
	private $detailAddress;
	
	private $isManage;
	
	private $regionCode;
	
	private $responsiblePerson;
	
	private $responsiblePhone;
	
	private $snStoreCode;
	
	private $startBusinessDate;
	
	private $storeCityCode;
	
	private $storeCityName;
	
	private $storeCode;
	
	private $storeDistrictCode;
	
	private $storeDistrictName;
	
	private $storeLvCode;
	
	private $storeName;
	
	private $storeProvCode;
	
	private $storeProvName;
	
	private $storeSource;
	
	private $storeTownCode;
	
	private $storeTownName;
	
	private $storeType;
	
	private $storeXzCode;
	
	private $storeYtCode;
	
	private $zipCode;
	
	public function getAreaCode() {
		return $this->areaCode;
	}

	public function setAreaCode($areaCode) {
		$this->areaCode = $areaCode;
		$this->apiParams["areaCode"] = $areaCode;
	}
	
	public function getBusinessType() {
		return $this->businessType;
	}

	public function setBusinessType($businessType) {
		$this->businessType = $businessType;
		$this->apiParams["businessType"] = $businessType;
	}
	
	public function getCompanyCode() {
		return $this->companyCode;
	}

	public function setCompanyCode($companyCode) {
		$this->companyCode = $companyCode;
		$this->apiParams["companyCode"] = $companyCode;
	}
	
	public function getContactPerson() {
		return $this->contactPerson;
	}

	public function setContactPerson($contactPerson) {
		$this->contactPerson = $contactPerson;
		$this->apiParams["contactPerson"] = $contactPerson;
	}
	
	public function getContactPhone() {
		return $this->contactPhone;
	}

	public function setContactPhone($contactPhone) {
		$this->contactPhone = $contactPhone;
		$this->apiParams["contactPhone"] = $contactPhone;
	}
	
	public function getContractStartDate() {
		return $this->contractStartDate;
	}

	public function setContractStartDate($contractStartDate) {
		$this->contractStartDate = $contractStartDate;
		$this->apiParams["contractStartDate"] = $contractStartDate;
	}
	
	public function getDetailAddress() {
		return $this->detailAddress;
	}

	public function setDetailAddress($detailAddress) {
		$this->detailAddress = $detailAddress;
		$this->apiParams["detailAddress"] = $detailAddress;
	}
	
	public function getIsManage() {
		return $this->isManage;
	}

	public function setIsManage($isManage) {
		$this->isManage = $isManage;
		$this->apiParams["isManage"] = $isManage;
	}
	
	public function getRegionCode() {
		return $this->regionCode;
	}

	public function setRegionCode($regionCode) {
		$this->regionCode = $regionCode;
		$this->apiParams["regionCode"] = $regionCode;
	}
	
	public function getResponsiblePerson() {
		return $this->responsiblePerson;
	}

	public function setResponsiblePerson($responsiblePerson) {
		$this->responsiblePerson = $responsiblePerson;
		$this->apiParams["responsiblePerson"] = $responsiblePerson;
	}
	
	public function getResponsiblePhone() {
		return $this->responsiblePhone;
	}

	public function setResponsiblePhone($responsiblePhone) {
		$this->responsiblePhone = $responsiblePhone;
		$this->apiParams["responsiblePhone"] = $responsiblePhone;
	}
	
	public function getSnStoreCode() {
		return $this->snStoreCode;
	}

	public function setSnStoreCode($snStoreCode) {
		$this->snStoreCode = $snStoreCode;
		$this->apiParams["snStoreCode"] = $snStoreCode;
	}
	
	public function getStartBusinessDate() {
		return $this->startBusinessDate;
	}

	public function setStartBusinessDate($startBusinessDate) {
		$this->startBusinessDate = $startBusinessDate;
		$this->apiParams["startBusinessDate"] = $startBusinessDate;
	}
	
	public function getStoreCityCode() {
		return $this->storeCityCode;
	}

	public function setStoreCityCode($storeCityCode) {
		$this->storeCityCode = $storeCityCode;
		$this->apiParams["storeCityCode"] = $storeCityCode;
	}
	
	public function getStoreCityName() {
		return $this->storeCityName;
	}

	public function setStoreCityName($storeCityName) {
		$this->storeCityName = $storeCityName;
		$this->apiParams["storeCityName"] = $storeCityName;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}

	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getStoreDistrictCode() {
		return $this->storeDistrictCode;
	}

	public function setStoreDistrictCode($storeDistrictCode) {
		$this->storeDistrictCode = $storeDistrictCode;
		$this->apiParams["storeDistrictCode"] = $storeDistrictCode;
	}
	
	public function getStoreDistrictName() {
		return $this->storeDistrictName;
	}

	public function setStoreDistrictName($storeDistrictName) {
		$this->storeDistrictName = $storeDistrictName;
		$this->apiParams["storeDistrictName"] = $storeDistrictName;
	}
	
	public function getStoreLvCode() {
		return $this->storeLvCode;
	}

	public function setStoreLvCode($storeLvCode) {
		$this->storeLvCode = $storeLvCode;
		$this->apiParams["storeLvCode"] = $storeLvCode;
	}
	
	public function getStoreName() {
		return $this->storeName;
	}

	public function setStoreName($storeName) {
		$this->storeName = $storeName;
		$this->apiParams["storeName"] = $storeName;
	}
	
	public function getStoreProvCode() {
		return $this->storeProvCode;
	}

	public function setStoreProvCode($storeProvCode) {
		$this->storeProvCode = $storeProvCode;
		$this->apiParams["storeProvCode"] = $storeProvCode;
	}
	
	public function getStoreProvName() {
		return $this->storeProvName;
	}

	public function setStoreProvName($storeProvName) {
		$this->storeProvName = $storeProvName;
		$this->apiParams["storeProvName"] = $storeProvName;
	}
	
	public function getStoreSource() {
		return $this->storeSource;
	}

	public function setStoreSource($storeSource) {
		$this->storeSource = $storeSource;
		$this->apiParams["storeSource"] = $storeSource;
	}
	
	public function getStoreTownCode() {
		return $this->storeTownCode;
	}

	public function setStoreTownCode($storeTownCode) {
		$this->storeTownCode = $storeTownCode;
		$this->apiParams["storeTownCode"] = $storeTownCode;
	}
	
	public function getStoreTownName() {
		return $this->storeTownName;
	}

	public function setStoreTownName($storeTownName) {
		$this->storeTownName = $storeTownName;
		$this->apiParams["storeTownName"] = $storeTownName;
	}
	
	public function getStoreType() {
		return $this->storeType;
	}

	public function setStoreType($storeType) {
		$this->storeType = $storeType;
		$this->apiParams["storeType"] = $storeType;
	}
	
	public function getStoreXzCode() {
		return $this->storeXzCode;
	}

	public function setStoreXzCode($storeXzCode) {
		$this->storeXzCode = $storeXzCode;
		$this->apiParams["storeXzCode"] = $storeXzCode;
	}
	
	public function getStoreYtCode() {
		return $this->storeYtCode;
	}

	public function setStoreYtCode($storeYtCode) {
		$this->storeYtCode = $storeYtCode;
		$this->apiParams["storeYtCode"] = $storeYtCode;
	}
	
	public function getZipCode() {
		return $this->zipCode;
	}

	public function setZipCode($zipCode) {
		$this->zipCode = $zipCode;
		$this->apiParams["zipCode"] = $zipCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>