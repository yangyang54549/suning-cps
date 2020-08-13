<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-29
 */
class SubscribeAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $cmmdtyName;
	
	/**
	 * 
	 */
	private $extOrderId;
	
	/**
	 * 
	 */
	private $mobileNum;
	
	/**
	 * 
	 */
	private $orderTime;
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}
	
	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
	}
	
	public function getExtOrderId() {
		return $this->extOrderId;
	}
	
	public function setExtOrderId($extOrderId) {
		$this->extOrderId = $extOrderId;
		$this->apiParams["extOrderId"] = $extOrderId;
	}
	
	public function getMobileNum() {
		return $this->mobileNum;
	}
	
	public function setMobileNum($mobileNum) {
		$this->mobileNum = $mobileNum;
		$this->apiParams["mobileNum"] = $mobileNum;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}
	
	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getApiMethodName(){
		return 'suning.superext.subscribe.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->extOrderId, 'extOrderId');
		RequestCheckUtil::checkNotNull($this->mobileNum, 'mobileNum');
	}
	
	public function getBizName(){
		return "addSubscribe";
	}
	
}

?>