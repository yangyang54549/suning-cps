<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-22
 */
class ShopfavoriteAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channel;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $entrance;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getEntrance() {
		return $this->entrance;
	}
	
	public function setEntrance($entrance) {
		$this->entrance = $entrance;
		$this->apiParams["entrance"] = $entrance;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopaddfavorite.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
	}
	
	public function getBizName(){
		return "addShopaddfavorite";
	}
	
}

?>