<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-6
 */
class SignatureDeleteRequest  extends SuningRequest{
	
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
	private $name;
	
	/**
	 * 
	 */
	private $timeStamp;
	
	/**
	 * 
	 */
	private $userId;
	
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
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getTimeStamp() {
		return $this->timeStamp;
	}
	
	public function setTimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParams["timeStamp"] = $timeStamp;
	}
	
	public function getUserId() {
		return $this->userId;
	}
	
	public function setUserId($userId) {
		$this->userId = $userId;
		$this->apiParams["userId"] = $userId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.signature.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
	}
	
	public function getBizName(){
		return "deleteSignature";
	}
	
}

?>