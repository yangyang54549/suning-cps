<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class CustCreateRequest  extends SuningRequest{
	
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
	private $authType;
	
	/**
	 * 
	 */
	private $filesContents;
	
	/**
	 * 
	 */
	private $filesSuffix;
	
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
	
	public function getAuthType() {
		return $this->authType;
	}
	
	public function setAuthType($authType) {
		$this->authType = $authType;
		$this->apiParams["authType"] = $authType;
	}
	
	public function getFilesContents() {
		return $this->filesContents;
	}
	
	public function setFilesContents($filesContents) {
		$this->filesContents = $filesContents;
		$this->apiParams["filesContents"] = $filesContents;
	}
	
	public function getFilesSuffix() {
		return $this->filesSuffix;
	}
	
	public function setFilesSuffix($filesSuffix) {
		$this->filesSuffix = $filesSuffix;
		$this->apiParams["filesSuffix"] = $filesSuffix;
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
		return 'suning.custom.cust.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->authType, 'authType');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
		RequestCheckUtil::checkNotNull($this->userId, 'userId');
	}
	
	public function getBizName(){
		return "createCust";
	}
	
}

?>