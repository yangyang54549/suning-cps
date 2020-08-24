<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;

/**
 * @date   2020-7-28
 */
class ExtensionlinkGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $pid;
	
	/**
	 * 
	 */
	private $productUrl;
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $quanUrl;
	
	/**
	 * 
	 */
	private $subUser;
	
	/**
	 * 
	 */
	private $sugsUrl;
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
		$this->apiParams["pid"] = $pid;
	}
	
	public function getProductUrl() {
		return $this->productUrl;
	}
	
	public function setProductUrl($productUrl) {
		$this->productUrl = $productUrl;
		$this->apiParams["productUrl"] = $productUrl;
	}
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getQuanUrl() {
		return $this->quanUrl;
	}
	
	public function setQuanUrl($quanUrl) {
		$this->quanUrl = $quanUrl;
		$this->apiParams["quanUrl"] = $quanUrl;
	}
	
	public function getSubUser() {
		return $this->subUser;
	}
	
	public function setSubUser($subUser) {
		$this->subUser = $subUser;
		$this->apiParams["subUser"] = $subUser;
	}
	
	public function getSugsUrl() {
		return $this->sugsUrl;
	}
	
	public function setSugsUrl($sugsUrl) {
		$this->sugsUrl = $sugsUrl;
		$this->apiParams["sugsUrl"] = $sugsUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.extensionlink.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getExtensionlink";
	}
	
}

