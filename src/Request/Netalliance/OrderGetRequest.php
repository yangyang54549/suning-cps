<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2020-4-29
 */
class OrderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $promotion;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getPromotion() {
		return $this->promotion;
	}
	
	public function setPromotion($promotion) {
		$this->promotion = $promotion;
		$this->apiParams["promotion"] = $promotion;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.order.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "getOrder";
	}
	
}

