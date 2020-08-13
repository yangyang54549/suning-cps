<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-27
 */
class SaveminvoicereceiverCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $cityName;
	
	/**
	 * 
	 */
	private $contactPerson;
	
	/**
	 * 
	 */
	private $contactPhone;
	
	/**
	 * 
	 */
	private $createTime;
	
	/**
	 * 
	 */
	private $createUser;
	
	/**
	 * 
	 */
	private $detailAddress;
	
	/**
	 * 
	 */
	private $districtCode;
	
	/**
	 * 
	 */
	private $districtName;
	
	/**
	 * 
	 */
	private $merchantCode;
	
	/**
	 * 
	 */
	private $provCode;
	
	/**
	 * 
	 */
	private $provName;
	
	/**
	 * 
	 */
	private $townCode;
	
	/**
	 * 
	 */
	private $townName;
	
	/**
	 * 
	 */
	private $updateTime;
	
	/**
	 * 
	 */
	private $updateUser;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
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
	
	public function getCreateTime() {
		return $this->createTime;
	}
	
	public function setCreateTime($createTime) {
		$this->createTime = $createTime;
		$this->apiParams["createTime"] = $createTime;
	}
	
	public function getCreateUser() {
		return $this->createUser;
	}
	
	public function setCreateUser($createUser) {
		$this->createUser = $createUser;
		$this->apiParams["createUser"] = $createUser;
	}
	
	public function getDetailAddress() {
		return $this->detailAddress;
	}
	
	public function setDetailAddress($detailAddress) {
		$this->detailAddress = $detailAddress;
		$this->apiParams["detailAddress"] = $detailAddress;
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
	
	public function getMerchantCode() {
		return $this->merchantCode;
	}
	
	public function setMerchantCode($merchantCode) {
		$this->merchantCode = $merchantCode;
		$this->apiParams["merchantCode"] = $merchantCode;
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
	
	public function getUpdateTime() {
		return $this->updateTime;
	}
	
	public function setUpdateTime($updateTime) {
		$this->updateTime = $updateTime;
		$this->apiParams["updateTime"] = $updateTime;
	}
	
	public function getUpdateUser() {
		return $this->updateUser;
	}
	
	public function setUpdateUser($updateUser) {
		$this->updateUser = $updateUser;
		$this->apiParams["updateUser"] = $updateUser;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.saveminvoicereceiver.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "createSaveminvoicereceiver";
	}
	
}

?>