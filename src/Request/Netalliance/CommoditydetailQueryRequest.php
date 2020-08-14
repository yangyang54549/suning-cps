<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2020-5-15
 */
class CommoditydetailQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $commodityStr;
	
	/**
	 * 
	 */
	private $couponMark;
	
	/**
	 * 
	 */
	private $picHeight;
	
	/**
	 * 
	 */
	private $picWidth;
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCommodityStr() {
		return $this->commodityStr;
	}
	
	public function setCommodityStr($commodityStr) {
		$this->commodityStr = $commodityStr;
		$this->apiParams["commodityStr"] = $commodityStr;
	}
	
	public function getCouponMark() {
		return $this->couponMark;
	}
	
	public function setCouponMark($couponMark) {
		$this->couponMark = $couponMark;
		$this->apiParams["couponMark"] = $couponMark;
	}
	
	public function getPicHeight() {
		return $this->picHeight;
	}
	
	public function setPicHeight($picHeight) {
		$this->picHeight = $picHeight;
		$this->apiParams["picHeight"] = $picHeight;
	}
	
	public function getPicWidth() {
		return $this->picWidth;
	}
	
	public function setPicWidth($picWidth) {
		$this->picWidth = $picWidth;
		$this->apiParams["picWidth"] = $picWidth;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.commoditydetail.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodityStr, 'commodityStr');
	}
	
	public function getBizName(){
		return "queryCommoditydetail";
	}
	
}

?>