<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2020-3-26
 */
class CustompromotionurlQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $adBookId;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $visitUrl;
	
	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getVisitUrl() {
		return $this->visitUrl;
	}
	
	public function setVisitUrl($visitUrl) {
		$this->visitUrl = $visitUrl;
		$this->apiParams["visitUrl"] = $visitUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.custompromotionurl.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->adBookId, 'adBookId');
		RequestCheckUtil::checkNotNull($this->visitUrl, 'visitUrl');
	}
	
	public function getBizName(){
		return "queryCustompromotionurl";
	}
	
}

