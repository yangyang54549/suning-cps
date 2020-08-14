<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SelectSuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2017-7-27
 */
class MerchantcommodityQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	
	
	/**
	 * 
	 */
	private $adBookId;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	
	
	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.merchantcommodity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityId, 'activityId');
		RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
	}
	
	public function getBizName(){
		return "queryMerchantcommodity";
	}
	
}

