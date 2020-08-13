<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-26
 */
class PxcardReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderLineNumber;
	
	/**
	 * 
	 */
	private $pxCardList;
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}
	
	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getPxCardList() {
		return $this->pxCardList;
	}
	
	public function setPxCardList($pxCardList) {
		$this->pxCardList = $pxCardList;
		$arr = array();
		foreach ($pxCardList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["pxCardList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.pxcard.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderLineNumber, 'orderLineNumber');
	}
	
	public function getBizName(){
		return "receivePxcard";
	}
	
}

class PxCardList {

	private $apiParams = array();
	
	private $endTime;
	
	private $pxCardId;
	
	private $pxCardNo;
	
	private $startTime;
	
	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getPxCardId() {
		return $this->pxCardId;
	}

	public function setPxCardId($pxCardId) {
		$this->pxCardId = $pxCardId;
		$this->apiParams["pxCardId"] = $pxCardId;
	}
	
	public function getPxCardNo() {
		return $this->pxCardNo;
	}

	public function setPxCardNo($pxCardNo) {
		$this->pxCardNo = $pxCardNo;
		$this->apiParams["pxCardNo"] = $pxCardNo;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>