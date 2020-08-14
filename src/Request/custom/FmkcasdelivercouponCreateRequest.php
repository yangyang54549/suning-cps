<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-24
 */
class FmkcasdelivercouponCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $appToken;
	
	/**
	 * 
	 */
	private $appType;
	
	/**
	 * 
	 */
	private $buddleId;
	
	/**
	 * 
	 */
	private $businessScene;
	
	/**
	 * 
	 */
	private $clientIp;
	
	/**
	 * 
	 */
	private $couponsAmount;
	
	/**
	 * 
	 */
	private $deliverSource;
	
	/**
	 * 
	 */
	private $egoToken;
	
	/**
	 * 
	 */
	private $idNo;
	
	/**
	 * 
	 */
	private $invoker;
	
	/**
	 * 
	 */
	private $memberId;
	
	/**
	 * 
	 */
	private $pcToken;
	
	/**
	 * 
	 */
	private $phoneNo;
	
	/**
	 * 
	 */
	private $realName;
	
	/**
	 * 
	 */
	private $requestId;
	
	/**
	 * 
	 */
	private $requestKey;
	
	/**
	 * 
	 */
	private $requestNo;
	
	/**
	 * 
	 */
	private $terminalType;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getAppToken() {
		return $this->appToken;
	}
	
	public function setAppToken($appToken) {
		$this->appToken = $appToken;
		$this->apiParams["appToken"] = $appToken;
	}
	
	public function getAppType() {
		return $this->appType;
	}
	
	public function setAppType($appType) {
		$this->appType = $appType;
		$this->apiParams["appType"] = $appType;
	}
	
	public function getBuddleId() {
		return $this->buddleId;
	}
	
	public function setBuddleId($buddleId) {
		$this->buddleId = $buddleId;
		$this->apiParams["buddleId"] = $buddleId;
	}
	
	public function getBusinessScene() {
		return $this->businessScene;
	}
	
	public function setBusinessScene($businessScene) {
		$this->businessScene = $businessScene;
		$this->apiParams["businessScene"] = $businessScene;
	}
	
	public function getClientIp() {
		return $this->clientIp;
	}
	
	public function setClientIp($clientIp) {
		$this->clientIp = $clientIp;
		$this->apiParams["clientIp"] = $clientIp;
	}
	
	public function getCouponsAmount() {
		return $this->couponsAmount;
	}
	
	public function setCouponsAmount($couponsAmount) {
		$this->couponsAmount = $couponsAmount;
		$this->apiParams["couponsAmount"] = $couponsAmount;
	}
	
	public function getDeliverSource() {
		return $this->deliverSource;
	}
	
	public function setDeliverSource($deliverSource) {
		$this->deliverSource = $deliverSource;
		$this->apiParams["deliverSource"] = $deliverSource;
	}
	
	public function getEgoToken() {
		return $this->egoToken;
	}
	
	public function setEgoToken($egoToken) {
		$this->egoToken = $egoToken;
		$this->apiParams["egoToken"] = $egoToken;
	}
	
	public function getIdNo() {
		return $this->idNo;
	}
	
	public function setIdNo($idNo) {
		$this->idNo = $idNo;
		$this->apiParams["idNo"] = $idNo;
	}
	
	public function getInvoker() {
		return $this->invoker;
	}
	
	public function setInvoker($invoker) {
		$this->invoker = $invoker;
		$this->apiParams["invoker"] = $invoker;
	}
	
	public function getMemberId() {
		return $this->memberId;
	}
	
	public function setMemberId($memberId) {
		$this->memberId = $memberId;
		$this->apiParams["memberId"] = $memberId;
	}
	
	public function getPcToken() {
		return $this->pcToken;
	}
	
	public function setPcToken($pcToken) {
		$this->pcToken = $pcToken;
		$this->apiParams["pcToken"] = $pcToken;
	}
	
	public function getPhoneNo() {
		return $this->phoneNo;
	}
	
	public function setPhoneNo($phoneNo) {
		$this->phoneNo = $phoneNo;
		$this->apiParams["phoneNo"] = $phoneNo;
	}
	
	public function getRealName() {
		return $this->realName;
	}
	
	public function setRealName($realName) {
		$this->realName = $realName;
		$this->apiParams["realName"] = $realName;
	}
	
	public function getRequestId() {
		return $this->requestId;
	}
	
	public function setRequestId($requestId) {
		$this->requestId = $requestId;
		$this->apiParams["requestId"] = $requestId;
	}
	
	public function getRequestKey() {
		return $this->requestKey;
	}
	
	public function setRequestKey($requestKey) {
		$this->requestKey = $requestKey;
		$this->apiParams["requestKey"] = $requestKey;
	}
	
	public function getRequestNo() {
		return $this->requestNo;
	}
	
	public function setRequestNo($requestNo) {
		$this->requestNo = $requestNo;
		$this->apiParams["requestNo"] = $requestNo;
	}
	
	public function getTerminalType() {
		return $this->terminalType;
	}
	
	public function setTerminalType($terminalType) {
		$this->terminalType = $terminalType;
		$this->apiParams["terminalType"] = $terminalType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.fmkcasdelivercoupon.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->businessScene, 'businessScene');
		RequestCheckUtil::checkNotNull($this->deliverSource, 'deliverSource');
		RequestCheckUtil::checkNotNull($this->invoker, 'invoker');
		RequestCheckUtil::checkNotNull($this->memberId, 'memberId');
		RequestCheckUtil::checkNotNull($this->requestId, 'requestId');
		RequestCheckUtil::checkNotNull($this->requestNo, 'requestNo');
	}
	
	public function getBizName(){
		return "createFmkcasdelivercoupon";
	}
	
}

?>