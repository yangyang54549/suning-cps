<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2019-10-28
 */
class TwittershareurlQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $goodsNo;
	
	public function getGoodsNo() {
		return $this->goodsNo;
	}
	
	public function setGoodsNo($goodsNo) {
		$this->goodsNo = $goodsNo;
		$this->apiParams["goodsNo"] = $goodsNo;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.twittershareurl.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->goodsNo, 'goodsNo');
	}
	
	public function getBizName(){
		return "queryTwittershareurl";
	}
	
}

?>