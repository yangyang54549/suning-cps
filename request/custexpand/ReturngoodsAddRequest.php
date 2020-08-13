<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-8
 */
class ReturngoodsAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $addStructList;
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $backOrderItemId;
	
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
	private $onLineFlag;
	
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
	private $returnScene;
	
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
	private $subtractStructList;
	
	/**
	 * 
	 */
	private $tranTimestamp;
	
	public function getAddStructList() {
		return $this->addStructList;
	}
	
	public function setAddStructList($addStructList) {
		$this->addStructList = $addStructList;
		$arr = array();
		foreach ($addStructList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["addStructList"] = $arr;
	}
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getBackOrderItemId() {
		return $this->backOrderItemId;
	}
	
	public function setBackOrderItemId($backOrderItemId) {
		$this->backOrderItemId = $backOrderItemId;
		$this->apiParams["backOrderItemId"] = $backOrderItemId;
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
	
	public function getOnLineFlag() {
		return $this->onLineFlag;
	}
	
	public function setOnLineFlag($onLineFlag) {
		$this->onLineFlag = $onLineFlag;
		$this->apiParams["onLineFlag"] = $onLineFlag;
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
	
	public function getReturnScene() {
		return $this->returnScene;
	}
	
	public function setReturnScene($returnScene) {
		$this->returnScene = $returnScene;
		$this->apiParams["returnScene"] = $returnScene;
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
	
	public function getSubtractStructList() {
		return $this->subtractStructList;
	}
	
	public function setSubtractStructList($subtractStructList) {
		$this->subtractStructList = $subtractStructList;
		$arr = array();
		foreach ($subtractStructList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["subtractStructList"] = $arr;
	}
	
	public function getTranTimestamp() {
		return $this->tranTimestamp;
	}
	
	public function setTranTimestamp($tranTimestamp) {
		$this->tranTimestamp = $tranTimestamp;
		$this->apiParams["tranTimestamp"] = $tranTimestamp;
	}
	
	public function getApiMethodName(){
		return 'suning.custexpand.returngoods.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->backOrderItemId, 'backOrderItemId');
		RequestCheckUtil::checkNotNull($this->branch, 'branch');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->ecoType, 'ecoType');
		RequestCheckUtil::checkNotNull($this->handlers, 'handlers');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->returnScene, 'returnScene');
		RequestCheckUtil::checkNotNull($this->sourceChannel, 'sourceChannel');
		RequestCheckUtil::checkNotNull($this->sourceSystemNo, 'sourceSystemNo');
		RequestCheckUtil::checkNotNull($this->store, 'store');
		RequestCheckUtil::checkNotNull($this->tranTimestamp, 'tranTimestamp');
	}
	
	public function getBizName(){
		return "addReturngoods";
	}
	
}

class AddStructList {

	private $apiParams = array();
	
	private $accountAddAmt;
	
	private $accountType;
	
	public function getAccountAddAmt() {
		return $this->accountAddAmt;
	}

	public function setAccountAddAmt($accountAddAmt) {
		$this->accountAddAmt = $accountAddAmt;
		$this->apiParams["accountAddAmt"] = $accountAddAmt;
	}
	
	public function getAccountType() {
		return $this->accountType;
	}

	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		$this->apiParams["accountType"] = $accountType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class SubtractStructList {

	private $apiParams = array();
	
	private $accountSubAmt;
	
	private $accountTp;
	
	public function getAccountSubAmt() {
		return $this->accountSubAmt;
	}

	public function setAccountSubAmt($accountSubAmt) {
		$this->accountSubAmt = $accountSubAmt;
		$this->apiParams["accountSubAmt"] = $accountSubAmt;
	}
	
	public function getAccountTp() {
		return $this->accountTp;
	}

	public function setAccountTp($accountTp) {
		$this->accountTp = $accountTp;
		$this->apiParams["accountTp"] = $accountTp;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>