<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-29
 */
class CommodityimagesQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $commodityCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $terminalType;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}
	
	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getTerminalType() {
		return $this->terminalType;
	}
	
	public function setTerminalType($terminalType) {
		$this->terminalType = $terminalType;
		$this->apiParams["terminalType"] = $terminalType;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.commodityimages.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodityCode, 'commodityCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryCommodityimages";
	}
	
}

?>