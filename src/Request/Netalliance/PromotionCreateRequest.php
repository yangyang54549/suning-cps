<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2019-10-28
 */
class PromotionCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $positionNames;
	
	/**
	 * 
	 */
	private $webSiteId;
	
	public function getPositionNames() {
		return $this->positionNames;
	}
	
	public function setPositionNames($positionNames) {
		$this->positionNames = $positionNames;
		$this->apiParams["positionNames"] = $positionNames;
	}
	
	public function getWebSiteId() {
		return $this->webSiteId;
	}
	
	public function setWebSiteId($webSiteId) {
		$this->webSiteId = $webSiteId;
		$this->apiParams["webSiteId"] = $webSiteId;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.promotion.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->positionNames, 'positionNames');
		RequestCheckUtil::checkNotNull($this->webSiteId, 'webSiteId');
	}
	
	public function getBizName(){
		return "createPromotion";
	}
	
}

