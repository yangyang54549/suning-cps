<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SelectSuningRequest;

/**
 * @date   2016-11-30
 */
class MerchantactivityQueryRequest  extends SelectSuningRequest{
	
	
	
	
	
	public function getApiMethodName(){
		return 'suning.Netalliance.merchantactivity.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryMerchantactivity";
	}
	
}

