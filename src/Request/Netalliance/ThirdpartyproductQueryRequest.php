<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2019-9-19
 */
class ThirdpartyproductQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $detailUrl;
	
	/**
	 * 
	 */
	private $statParam;
	
	public function getDetailUrl() {
		return $this->detailUrl;
	}
	
	public function setDetailUrl($detailUrl) {
		$this->detailUrl = $detailUrl;
		$this->apiParams["detailUrl"] = $detailUrl;
	}
	
	public function getStatParam() {
		return $this->statParam;
	}
	
	public function setStatParam($statParam) {
		$this->statParam = $statParam;
		$this->apiParams["statParam"] = $statParam;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.thirdpartyproduct.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->detailUrl, 'detailUrl');
		RequestCheckUtil::checkNotNull($this->statParam, 'statParam');
	}
	
	public function getBizName(){
		return "queryThirdpartyproduct";
	}
	
}

