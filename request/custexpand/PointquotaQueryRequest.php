<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-8
 */
class PointquotaQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $sourceChannel;
	
	/**
	 * 
	 */
	private $sourceSystemNo;
	
	/**
	 * 
	 */
	private $tranTimestamp;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getSourceChannel() {
		return $this->sourceChannel;
	}
	
	public function setSourceChannel($sourceChannel) {
		$this->sourceChannel = $sourceChannel;
		$this->apiParams["sourceChannel"] = $sourceChannel;
	}
	
	public function getSourceSystemNo() {
		return $this->sourceSystemNo;
	}
	
	public function setSourceSystemNo($sourceSystemNo) {
		$this->sourceSystemNo = $sourceSystemNo;
		$this->apiParams["sourceSystemNo"] = $sourceSystemNo;
	}
	
	public function getTranTimestamp() {
		return $this->tranTimestamp;
	}
	
	public function setTranTimestamp($tranTimestamp) {
		$this->tranTimestamp = $tranTimestamp;
		$this->apiParams["tranTimestamp"] = $tranTimestamp;
	}
	
	public function getApiMethodName(){
		return 'suning.custexpand.pointquota.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->sourceChannel, 'sourceChannel');
		RequestCheckUtil::checkNotNull($this->sourceSystemNo, 'sourceSystemNo');
		RequestCheckUtil::checkNotNull($this->tranTimestamp, 'tranTimestamp');
	}
	
	public function getBizName(){
		return "queryPointquota";
	}
	
}

?>