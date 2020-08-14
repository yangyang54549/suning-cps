<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;
/**
 * @date   2020-5-15
 */
class HoistinglinkQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $goodsCode;
	
	/**
	 * 
	 */
	private $mertCode;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $adBookId;
	
	/**
	 * 
	 */
	private $backurl;
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}
	
	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getMertCode() {
		return $this->mertCode;
	}
	
	public function setMertCode($mertCode) {
		$this->mertCode = $mertCode;
		$this->apiParams["mertCode"] = $mertCode;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getAdBookId() {
		return $this->adBookId;
	}
	
	public function setAdBookId($adBookId) {
		$this->adBookId = $adBookId;
		$this->apiParams["adBookId"] = $adBookId;
	}
	
	public function getBackurl() {
		return $this->backurl;
	}
	
	public function setBackurl($backurl) {
		$this->backurl = $backurl;
		$this->apiParams["backurl"] = $backurl;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.hoistinglink.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->goodsCode, 'goodsCode');
		RequestCheckUtil::checkNotNull($this->mertCode, 'mertCode');
	}
	
	public function getBizName(){
		return "queryHoistinglink";
	}
	
}

?>