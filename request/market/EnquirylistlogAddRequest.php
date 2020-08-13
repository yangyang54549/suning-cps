<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-14
 */
class EnquirylistlogAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $reqJson;
	
	public function getReqJson() {
		return $this->reqJson;
	}
	
	public function setReqJson($reqJson) {
		$this->reqJson = $reqJson;
		$this->apiParams["reqJson"] = $reqJson;
	}
	
	public function getApiMethodName(){
		return 'suning.market.enquirylistlog.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->reqJson, 'reqJson');
	}
	
	public function getBizName(){
		return "addEnquirylistlog";
	}
	
}

?>