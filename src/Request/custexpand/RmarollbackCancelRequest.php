<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-8
 */
class RmarollbackCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $branch;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $ecoType;
	
	/**
	 * 
	 */
	private $handlers;
	
	/**
	 * 
	 */
	private $isCalcTotalOffsetLimit;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $orderType;
	
	/**
	 * 
	 */
	private $sourceChannel;
	
	/**
	 * 
	 */
	private $sourceSystemNo;
	
	/**
	 * 
	 */
	private $store;
	
	/**
	 * 
	 */
	private $tranTimestamp;
	
	/**
	 * 
	 */
	private $uniteOrderId;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getBranch() {
		return $this->branch;
	}
	
	public function setBranch($branch) {
		$this->branch = $branch;
		$this->apiParams["branch"] = $branch;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getEcoType() {
		return $this->ecoType;
	}
	
	public function setEcoType($ecoType) {
		$this->ecoType = $ecoType;
		$this->apiParams["ecoType"] = $ecoType;
	}
	
	public function getHandlers() {
		return $this->handlers;
	}
	
	public function setHandlers($handlers) {
		$this->handlers = $handlers;
		$this->apiParams["handlers"] = $handlers;
	}
	
	public function getIsCalcTotalOffsetLimit() {
		return $this->isCalcTotalOffsetLimit;
	}
	
	public function setIsCalcTotalOffsetLimit($isCalcTotalOffsetLimit) {
		$this->isCalcTotalOffsetLimit = $isCalcTotalOffsetLimit;
		$this->apiParams["isCalcTotalOffsetLimit"] = $isCalcTotalOffsetLimit;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getSourceChannel() {
		return $this->sourceChannel;
	}
	
	public function setSourceChannel($sourceChannel) {
		$this->sourceChannel = $sourceChannel;
		$this->apiParams["sourceChannel"] = $sourceChannel;
	}
	
	public function getSourceSystemNo() {
		return $this->sourceSystemNo;
	}
	
	public function setSourceSystemNo($sourceSystemNo) {
		$this->sourceSystemNo = $sourceSystemNo;
		$this->apiParams["sourceSystemNo"] = $sourceSystemNo;
	}
	
	public function getStore() {
		return $this->store;
	}
	
	public function setStore($store) {
		$this->store = $store;
		$this->apiParams["store"] = $store;
	}
	
	public function getTranTimestamp() {
		return $this->tranTimestamp;
	}
	
	public function setTranTimestamp($tranTimestamp) {
		$this->tranTimestamp = $tranTimestamp;
		$this->apiParams["tranTimestamp"] = $tranTimestamp;
	}
	
	public function getUniteOrderId() {
		return $this->uniteOrderId;
	}
	
	public function setUniteOrderId($uniteOrderId) {
		$this->uniteOrderId = $uniteOrderId;
		$this->apiParams["uniteOrderId"] = $uniteOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.custexpand.rmarollback.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->branch, 'branch');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->ecoType, 'ecoType');
		RequestCheckUtil::checkNotNull($this->handlers, 'handlers');
		RequestCheckUtil::checkNotNull($this->sourceChannel, 'sourceChannel');
		RequestCheckUtil::checkNotNull($this->sourceSystemNo, 'sourceSystemNo');
		RequestCheckUtil::checkNotNull($this->store, 'store');
		RequestCheckUtil::checkNotNull($this->tranTimestamp, 'tranTimestamp');
	}
	
	public function getBizName(){
		return "cancelRmarollback";
	}
	
}

?>