<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-6
 */
class SignaturewhiteDeleteRequest  extends SuningRequest{
	
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
	private $mobile;
	
	/**
	 * 
	 */
	private $signature;
	
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
	
	public function getMobile() {
		return $this->mobile;
	}
	
	public function setMobile($mobile) {
		$this->mobile = $mobile;
		$this->apiParams["mobile"] = $mobile;
	}
	
	public function getSignature() {
		return $this->signature;
	}
	
	public function setSignature($signature) {
		$this->signature = $signature;
		$this->apiParams["signature"] = $signature;
	}
	
	public function getTimeStamp() {
		return $this->timeStamp;
	}
	
	public function setTimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParams["timeStamp"] = $timeStamp;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.signaturewhite.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->mobile, 'mobile');
		RequestCheckUtil::checkNotNull($this->signature, 'signature');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
	}
	
	public function getBizName(){
		return "deleteSignaturewhite";
	}
	
}

?>