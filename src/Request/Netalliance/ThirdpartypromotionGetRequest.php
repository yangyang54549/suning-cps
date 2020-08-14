<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2020-5-29
 */
class ThirdpartypromotionGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channel;
	
	/**
	 * 
	 */
	private $outerId;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $subUser;
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getOuterId() {
		return $this->outerId;
	}
	
	public function setOuterId($outerId) {
		$this->outerId = $outerId;
		$this->apiParams["outerId"] = $outerId;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.thirdpartygetpromotion.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channel, 'channel');
		RequestCheckUtil::checkNotNull($this->outerId, 'outerId');
	}
	
	public function getBizName(){
		return "getThirdpartygetpromotion";
	}
	
}

