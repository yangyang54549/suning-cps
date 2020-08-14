<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;

/**
 * @date   2019-11-6
 */
class InverstmentcategoryidQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.Netalliance.inverstmentcategoryid.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryInverstmentcategoryid";
	}
	
}

?>