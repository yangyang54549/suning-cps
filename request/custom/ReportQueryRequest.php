<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class ReportQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accessKeyId;
	
	/**
	 * 
	 */
	private $accessSign;
	
	/**
	 * 
	 */
	private $externalMsgId;
	
	/**
	 * 
	 */
	private $smsAppCode;
	
	/**
	 * 
	 */
	private $timeStamp;
	
	public function getAccessKeyId() {
		return $this->accessKeyId;
	}
	
	public function setAccessKeyId($accessKeyId) {
		$this->accessKeyId = $accessKeyId;
		$this->apiParams["accessKeyId"] = $accessKeyId;
	}
	
	public function getAccessSign() {
		return $this->accessSign;
	}
	
	public function setAccessSign($accessSign) {
		$this->accessSign = $accessSign;
		$this->apiParams["accessSign"] = $accessSign;
	}
	
	public function getExternalMsgId() {
		return $this->externalMsgId;
	}
	
	public function setExternalMsgId($externalMsgId) {
		$this->externalMsgId = $externalMsgId;
		$this->apiParams["externalMsgId"] = $externalMsgId;
	}
	
	public function getSmsAppCode() {
		return $this->smsAppCode;
	}
	
	public function setSmsAppCode($smsAppCode) {
		$this->smsAppCode = $smsAppCode;
		$this->apiParams["smsAppCode"] = $smsAppCode;
	}
	
	public function getTimeStamp() {
		return $this->timeStamp;
	}
	
	public function setTimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParams["timeStamp"] = $timeStamp;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.report.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->externalMsgId, 'externalMsgId');
		RequestCheckUtil::checkNotNull($this->smsAppCode, 'smsAppCode');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
	}
	
	public function getBizName(){
		return "queryReport";
	}
	
}

?>