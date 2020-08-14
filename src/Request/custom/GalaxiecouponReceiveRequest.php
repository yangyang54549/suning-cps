<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-12
 */
class GalaxiecouponReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityInfo;
	
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
	private $miniSource;
	
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
	
	public function getActivityInfo() {
		return $this->activityInfo;
	}
	
	public function setActivityInfo($activityInfo) {
		$this->activityInfo = $activityInfo;
		$this->apiParams["activityInfo"] = $activityInfo;
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
	
	public function getMiniSource() {
		return $this->miniSource;
	}
	
	public function setMiniSource($miniSource) {
		$this->miniSource = $miniSource;
		$this->apiParams["miniSource"] = $miniSource;
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
		return 'suning.custom.galaxiecoupon.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityInfo, 'activityInfo');
		RequestCheckUtil::checkNotNull($this->bonusTrigerId, 'bonusTrigerId');
		RequestCheckUtil::checkNotNull($this->detect, 'detect');
		RequestCheckUtil::checkNotNull($this->dfpToken, 'dfpToken');
		RequestCheckUtil::checkNotNull($this->miniSource, 'miniSource');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->terminalId, 'terminalId');
		RequestCheckUtil::checkNotNull($this->termiSys, 'termiSys');
	}
	
	public function getBizName(){
		return "receiveGalaxiecoupon";
	}
	
}

?>