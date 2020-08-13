<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-13
 */
class UnionInfomationGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $goodsCode;
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}
	
	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.unioninfomation.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->goodsCode, 'goodsCode');
	}
	
	public function getBizName(){
		return "getUnionInfomation";
	}
	
}

?>