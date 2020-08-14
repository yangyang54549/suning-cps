<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-7
 */
class ImperfectconfigQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $buCode;
	
	/**
	 * 
	 */
	private $serialNum;
	
	public function getBuCode() {
		return $this->buCode;
	}
	
	public function setBuCode($buCode) {
		$this->buCode = $buCode;
		$this->apiParams["buCode"] = $buCode;
	}
	
	public function getSerialNum() {
		return $this->serialNum;
	}
	
	public function setSerialNum($serialNum) {
		$this->serialNum = $serialNum;
		$this->apiParams["serialNum"] = $serialNum;
	}
	
	public function getApiMethodName(){
		return 'suning.defctive.imperfectconfig.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->serialNum, 'serialNum');
	}
	
	public function getBizName(){
		return "queryImperfectconfig";
	}
	
}

?>