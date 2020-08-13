<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class AuthorizeGetRequest  extends SuningRequest{
	
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
	private $redirectUrl;
	
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
	
	public function getRedirectUrl() {
		return $this->redirectUrl;
	}
	
	public function setRedirectUrl($redirectUrl) {
		$this->redirectUrl = $redirectUrl;
		$this->apiParams["redirectUrl"] = $redirectUrl;
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
		return 'suning.custom.authorize.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->redirectUrl, 'redirectUrl');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
		RequestCheckUtil::checkNotNull($this->userId, 'userId');
	}
	
	public function getBizName(){
		return "getAuthorize";
	}
	
}

?>