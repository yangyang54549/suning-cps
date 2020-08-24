<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SelectSuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2019-7-12
 */
class UnionInfomationQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $adBookId;

	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.netalliance.unioninfomation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
	}
	
	public function getBizName(){
		return "queryUnionInfomation";
	}
	
}

