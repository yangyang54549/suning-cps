<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-16
 */
class GalaxiecouponGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $activitySecretKey;
	
	/**
	 * 
	 */
	private $appVersion;
	
	/**
	 * 
	 */
	private $bonusTrigerId;
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $detect;
	
	/**
	 * 
	 */
	private $dfpToken;
	
	/**
	 * 
	 */
	private $idfToken;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $miniSource;
	
	/**
	 * 
	 */
	private $requestIp;
	
	/**
	 * 
	 */
	private $serialNo;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $terminalId;
	
	/**
	 * 
	 */
	private $termiSys;
	
	/**
	 * 
	 */
	private $valiNo;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getActivitySecretKey() {
		return $this->activitySecretKey;
	}
	
	public function setActivitySecretKey($activitySecretKey) {
		$this->activitySecretKey = $activitySecretKey;
		$this->apiParams["activitySecretKey"] = $activitySecretKey;
	}
	
	public function getAppVersion() {
		return $this->appVersion;
	}
	
	public function setAppVersion($appVersion) {
		$this->appVersion = $appVersion;
		$this->apiParams["appVersion"] = $appVersion;
	}
	
	public function getBonusTrigerId() {
		return $this->bonusTrigerId;
	}
	
	public function setBonusTrigerId($bonusTrigerId) {
		$this->bonusTrigerId = $bonusTrigerId;
		$this->apiParams["bonusTrigerId"] = $bonusTrigerId;
	}
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getDetect() {
		return $this->detect;
	}
	
	public function setDetect($detect) {
		$this->detect = $detect;
		$this->apiParams["detect"] = $detect;
	}
	
	public function getDfpToken() {
		return $this->dfpToken;
	}
	
	public function setDfpToken($dfpToken) {
		$this->dfpToken = $dfpToken;
		$this->apiParams["dfpToken"] = $dfpToken;
	}
	
	public function getIdfToken() {
		return $this->idfToken;
	}
	
	public function setIdfToken($idfToken) {
		$this->idfToken = $idfToken;
		$this->apiParams["idfToken"] = $idfToken;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getMiniSource() {
		return $this->miniSource;
	}
	
	public function setMiniSource($miniSource) {
		$this->miniSource = $miniSource;
		$this->apiParams["miniSource"] = $miniSource;
	}
	
	public function getRequestIp() {
		return $this->requestIp;
	}
	
	public function setRequestIp($requestIp) {
		$this->requestIp = $requestIp;
		$this->apiParams["requestIp"] = $requestIp;
	}
	
	public function getSerialNo() {
		return $this->serialNo;
	}
	
	public function setSerialNo($serialNo) {
		$this->serialNo = $serialNo;
		$this->apiParams["serialNo"] = $serialNo;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getTerminalId() {
		return $this->terminalId;
	}
	
	public function setTerminalId($terminalId) {
		$this->terminalId = $terminalId;
		$this->apiParams["terminalId"] = $terminalId;
	}
	
	public function getTermiSys() {
		return $this->termiSys;
	}
	
	public function setTermiSys($termiSys) {
		$this->termiSys = $termiSys;
		$this->apiParams["termiSys"] = $termiSys;
	}
	
	public function getValiNo() {
		return $this->valiNo;
	}
	
	public function setValiNo($valiNo) {
		$this->valiNo = $valiNo;
		$this->apiParams["valiNo"] = $valiNo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.galaxiecoupon.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->activitySecretKey, 'activitySecretKey');
		RequestCheckUtil::checkNotNull($this->bonusTrigerId, 'bonusTrigerId');
		RequestCheckUtil::checkNotNull($this->detect, 'detect');
		RequestCheckUtil::checkNotNull($this->dfpToken, 'dfpToken');
		RequestCheckUtil::checkNotNull($this->requestIp, 'requestIp');
		RequestCheckUtil::checkNotNull($this->terminalId, 'terminalId');
		RequestCheckUtil::checkNotNull($this->termiSys, 'termiSys');
	}
	
	public function getBizName(){
		return "getGalaxiecoupon";
	}
	
}

?>