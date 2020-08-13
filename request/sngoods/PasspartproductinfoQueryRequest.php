<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-30
 */
class PasspartproductinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $spuId;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getSpuId() {
		return $this->spuId;
	}
	
	public function setSpuId($spuId) {
		$this->spuId = $spuId;
		$this->apiParams["spuId"] = $spuId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.passpartproductinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->spuId, 'spuId');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryPasspartproductinfo";
	}
	
}

?>