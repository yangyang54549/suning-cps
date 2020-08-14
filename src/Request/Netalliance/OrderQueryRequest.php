<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SelectSuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2020-8-4
 */
class OrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endTime;
	
	/**
	 * 
	 */
	private $orderChannel;
	
	/**
	 * 
	 */
	private $orderLineStatus;
	
	
	
	/**
	 * 
	 */
	private $pid;
	
	/**
	 * 
	 */
	private $promotion;
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getOrderChannel() {
		return $this->orderChannel;
	}
	
	public function setOrderChannel($orderChannel) {
		$this->orderChannel = $orderChannel;
		$this->apiParams["orderChannel"] = $orderChannel;
	}
	
	public function getOrderLineStatus() {
		return $this->orderLineStatus;
	}
	
	public function setOrderLineStatus($orderLineStatus) {
		$this->orderLineStatus = $orderLineStatus;
		$this->apiParams["orderLineStatus"] = $orderLineStatus;
	}
	
	
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
		$this->apiParams["pid"] = $pid;
	}
	
	public function getPromotion() {
		return $this->promotion;
	}
	
	public function setPromotion($promotion) {
		$this->promotion = $promotion;
		$this->apiParams["promotion"] = $promotion;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.order.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "queryOrder";
	}
	
}

