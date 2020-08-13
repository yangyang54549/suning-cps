<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-8
 */
class OrderbuyConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cardType;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $deviceId;
	
	/**
	 * 
	 */
	private $ecoType;
	
	/**
	 * 
	 */
	private $invokerCode;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItem;
	
	/**
	 * 
	 */
	private $orderSubmitTime;
	
	/**
	 * 
	 */
	private $sceneType;
	
	/**
	 * 
	 */
	private $transId;
	
	public function getCardType() {
		return $this->cardType;
	}
	
	public function setCardType($cardType) {
		$this->cardType = $cardType;
		$this->apiParams["cardType"] = $cardType;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getDeviceId() {
		return $this->deviceId;
	}
	
	public function setDeviceId($deviceId) {
		$this->deviceId = $deviceId;
		$this->apiParams["deviceId"] = $deviceId;
	}
	
	public function getEcoType() {
		return $this->ecoType;
	}
	
	public function setEcoType($ecoType) {
		$this->ecoType = $ecoType;
		$this->apiParams["ecoType"] = $ecoType;
	}
	
	public function getInvokerCode() {
		return $this->invokerCode;
	}
	
	public function setInvokerCode($invokerCode) {
		$this->invokerCode = $invokerCode;
		$this->apiParams["invokerCode"] = $invokerCode;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItem() {
		return $this->orderItem;
	}
	
	public function setOrderItem($orderItem) {
		$this->orderItem = $orderItem;
		$arr = array();
		foreach ($orderItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItem"] = $arr;
	}
	
	public function getOrderSubmitTime() {
		return $this->orderSubmitTime;
	}
	
	public function setOrderSubmitTime($orderSubmitTime) {
		$this->orderSubmitTime = $orderSubmitTime;
		$this->apiParams["orderSubmitTime"] = $orderSubmitTime;
	}
	
	public function getSceneType() {
		return $this->sceneType;
	}
	
	public function setSceneType($sceneType) {
		$this->sceneType = $sceneType;
		$this->apiParams["sceneType"] = $sceneType;
	}
	
	public function getTransId() {
		return $this->transId;
	}
	
	public function setTransId($transId) {
		$this->transId = $transId;
		$this->apiParams["transId"] = $transId;
	}
	
	public function getApiMethodName(){
		return 'suning.custexpand.orderbuy.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cardType, 'cardType');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->ecoType, 'ecoType');
		RequestCheckUtil::checkNotNull($this->invokerCode, 'invokerCode');
		RequestCheckUtil::checkNotNull($this->orderSubmitTime, 'orderSubmitTime');
		RequestCheckUtil::checkNotNull($this->sceneType, 'sceneType');
		RequestCheckUtil::checkNotNull($this->transId, 'transId');
	}
	
	public function getBizName(){
		return "confirmOrderbuy";
	}
	
}

class OrderItem {

	private $apiParams = array();
	
	private $activityType;
	
	private $branch;
	
	private $cmdtyBrand;
	
	private $cmdtyCatalog;
	
	private $cmdtyCode;
	
	private $cmdtyCount;
	
	private $cmdtyGroup;
	
	private $cmdtyName;
	
	private $couponTotalMoney;
	
	private $dealItem;
	
	private $distChannel;
	
	private $giftCardMoney;
	
	private $invoiceType;
	
	private $managerCardMoney;
	
	private $orderAmt;
	
	private $orderItemId;
	
	private $orderItemType;
	
	private $orderType;
	
	private $orderTypeDesc;
	
	private $payItem;
	
	private $payTime;
	
	private $pointMoney;
	
	private $purchaseFlag;
	
	private $serviceFee;
	
	private $staffNum;
	
	private $stockArea;
	
	private $store;
	
	private $supplierCode;
	
	private $supplierType;
	
	private $transportFee;
	
	public function getActivityType() {
		return $this->activityType;
	}

	public function setActivityType($activityType) {
		$this->activityType = $activityType;
		$this->apiParams["activityType"] = $activityType;
	}
	
	public function getBranch() {
		return $this->branch;
	}

	public function setBranch($branch) {
		$this->branch = $branch;
		$this->apiParams["branch"] = $branch;
	}
	
	public function getCmdtyBrand() {
		return $this->cmdtyBrand;
	}

	public function setCmdtyBrand($cmdtyBrand) {
		$this->cmdtyBrand = $cmdtyBrand;
		$this->apiParams["cmdtyBrand"] = $cmdtyBrand;
	}
	
	public function getCmdtyCatalog() {
		return $this->cmdtyCatalog;
	}

	public function setCmdtyCatalog($cmdtyCatalog) {
		$this->cmdtyCatalog = $cmdtyCatalog;
		$this->apiParams["cmdtyCatalog"] = $cmdtyCatalog;
	}
	
	public function getCmdtyCode() {
		return $this->cmdtyCode;
	}

	public function setCmdtyCode($cmdtyCode) {
		$this->cmdtyCode = $cmdtyCode;
		$this->apiParams["cmdtyCode"] = $cmdtyCode;
	}
	
	public function getCmdtyCount() {
		return $this->cmdtyCount;
	}

	public function setCmdtyCount($cmdtyCount) {
		$this->cmdtyCount = $cmdtyCount;
		$this->apiParams["cmdtyCount"] = $cmdtyCount;
	}
	
	public function getCmdtyGroup() {
		return $this->cmdtyGroup;
	}

	public function setCmdtyGroup($cmdtyGroup) {
		$this->cmdtyGroup = $cmdtyGroup;
		$this->apiParams["cmdtyGroup"] = $cmdtyGroup;
	}
	
	public function getCmdtyName() {
		return $this->cmdtyName;
	}

	public function setCmdtyName($cmdtyName) {
		$this->cmdtyName = $cmdtyName;
		$this->apiParams["cmdtyName"] = $cmdtyName;
	}
	
	public function getCouponTotalMoney() {
		return $this->couponTotalMoney;
	}

	public function setCouponTotalMoney($couponTotalMoney) {
		$this->couponTotalMoney = $couponTotalMoney;
		$this->apiParams["couponTotalMoney"] = $couponTotalMoney;
	}
	
	public function getDealItem() {
		return $this->dealItem;
	}

	public function setDealItem($dealItem) {
		$this->dealItem = $dealItem;
		$arr = array();
		foreach ($dealItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["dealItem"] = $arr;
	}
	
	public function getDistChannel() {
		return $this->distChannel;
	}

	public function setDistChannel($distChannel) {
		$this->distChannel = $distChannel;
		$this->apiParams["distChannel"] = $distChannel;
	}
	
	public function getGiftCardMoney() {
		return $this->giftCardMoney;
	}

	public function setGiftCardMoney($giftCardMoney) {
		$this->giftCardMoney = $giftCardMoney;
		$this->apiParams["giftCardMoney"] = $giftCardMoney;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}

	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getManagerCardMoney() {
		return $this->managerCardMoney;
	}

	public function setManagerCardMoney($managerCardMoney) {
		$this->managerCardMoney = $managerCardMoney;
		$this->apiParams["managerCardMoney"] = $managerCardMoney;
	}
	
	public function getOrderAmt() {
		return $this->orderAmt;
	}

	public function setOrderAmt($orderAmt) {
		$this->orderAmt = $orderAmt;
		$this->apiParams["orderAmt"] = $orderAmt;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderItemType() {
		return $this->orderItemType;
	}

	public function setOrderItemType($orderItemType) {
		$this->orderItemType = $orderItemType;
		$this->apiParams["orderItemType"] = $orderItemType;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getOrderTypeDesc() {
		return $this->orderTypeDesc;
	}

	public function setOrderTypeDesc($orderTypeDesc) {
		$this->orderTypeDesc = $orderTypeDesc;
		$this->apiParams["orderTypeDesc"] = $orderTypeDesc;
	}
	
	public function getPayItem() {
		return $this->payItem;
	}

	public function setPayItem($payItem) {
		$this->payItem = $payItem;
		$arr = array();
		foreach ($payItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["payItem"] = $arr;
	}
	
	public function getPayTime() {
		return $this->payTime;
	}

	public function setPayTime($payTime) {
		$this->payTime = $payTime;
		$this->apiParams["payTime"] = $payTime;
	}
	
	public function getPointMoney() {
		return $this->pointMoney;
	}

	public function setPointMoney($pointMoney) {
		$this->pointMoney = $pointMoney;
		$this->apiParams["pointMoney"] = $pointMoney;
	}
	
	public function getPurchaseFlag() {
		return $this->purchaseFlag;
	}

	public function setPurchaseFlag($purchaseFlag) {
		$this->purchaseFlag = $purchaseFlag;
		$this->apiParams["purchaseFlag"] = $purchaseFlag;
	}
	
	public function getServiceFee() {
		return $this->serviceFee;
	}

	public function setServiceFee($serviceFee) {
		$this->serviceFee = $serviceFee;
		$this->apiParams["serviceFee"] = $serviceFee;
	}
	
	public function getStaffNum() {
		return $this->staffNum;
	}

	public function setStaffNum($staffNum) {
		$this->staffNum = $staffNum;
		$this->apiParams["staffNum"] = $staffNum;
	}
	
	public function getStockArea() {
		return $this->stockArea;
	}

	public function setStockArea($stockArea) {
		$this->stockArea = $stockArea;
		$this->apiParams["stockArea"] = $stockArea;
	}
	
	public function getStore() {
		return $this->store;
	}

	public function setStore($store) {
		$this->store = $store;
		$this->apiParams["store"] = $store;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSupplierType() {
		return $this->supplierType;
	}

	public function setSupplierType($supplierType) {
		$this->supplierType = $supplierType;
		$this->apiParams["supplierType"] = $supplierType;
	}
	
	public function getTransportFee() {
		return $this->transportFee;
	}

	public function setTransportFee($transportFee) {
		$this->transportFee = $transportFee;
		$this->apiParams["transportFee"] = $transportFee;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PayItem {

	private $apiParams = array();
	
	private $payMode;
	
	private $payMoney;
	
	public function getPayMode() {
		return $this->payMode;
	}

	public function setPayMode($payMode) {
		$this->payMode = $payMode;
		$this->apiParams["payMode"] = $payMode;
	}
	
	public function getPayMoney() {
		return $this->payMoney;
	}

	public function setPayMoney($payMoney) {
		$this->payMoney = $payMoney;
		$this->apiParams["payMoney"] = $payMoney;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class DealItem {

	private $apiParams = array();
	
	private $dealType;
	
	private $dealTypeFlag;
	
	private $promotionNum;
	
	public function getDealType() {
		return $this->dealType;
	}

	public function setDealType($dealType) {
		$this->dealType = $dealType;
		$this->apiParams["dealType"] = $dealType;
	}
	
	public function getDealTypeFlag() {
		return $this->dealTypeFlag;
	}

	public function setDealTypeFlag($dealTypeFlag) {
		$this->dealTypeFlag = $dealTypeFlag;
		$this->apiParams["dealTypeFlag"] = $dealTypeFlag;
	}
	
	public function getPromotionNum() {
		return $this->promotionNum;
	}

	public function setPromotionNum($promotionNum) {
		$this->promotionNum = $promotionNum;
		$this->apiParams["promotionNum"] = $promotionNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>