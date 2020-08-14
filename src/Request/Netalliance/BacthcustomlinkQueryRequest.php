<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;

/**
 * @date   2020-3-26
 */
class BacthcustomlinkQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $extend;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $subUser;
	
	public function getExtend() {
		return $this->extend;
	}
	
	public function setExtend($extend) {
		$this->extend = $extend;
		$this->apiParams["extend"] = $extend;
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
		return 'suning.Netalliance.bacthcustomlink.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->extend, 'extend');
	}
	
	public function getBizName(){
		return "queryBacthcustomlink";
	}
	
}

?>