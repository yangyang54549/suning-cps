<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-8
 */
class SnorderidbythirdidQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $tradeNo;
	
	public function getTradeNo() {
		return $this->tradeNo;
	}
	
	public function setTradeNo($tradeNo) {
		$this->tradeNo = $tradeNo;
		$this->apiParams["tradeNo"] = $tradeNo;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.snorderidbythirdid.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->tradeNo, 'tradeNo');
	}
	
	public function getBizName(){
		return "querySnorderidbythirdid";
	}
	
}

?>