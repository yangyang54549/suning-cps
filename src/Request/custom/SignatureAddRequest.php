<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class SignatureAddRequest  extends SuningRequest{
	
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
	private $businessLincenseFileContent;
	
	/**
	 * 
	 */
	private $businessLincenseFileSuffix;
	
	/**
	 * 
	 */
	private $certificateType;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $orgCodeFileContent;
	
	/**
	 * 
	 */
	private $orgCodeFileSuffix;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $screenshotFileContent;
	
	/**
	 * 
	 */
	private $screenshotFileSuffix;
	
	/**
	 * 
	 */
	private $sourceName;
	
	/**
	 * 
	 */
	private $subject;
	
	/**
	 * 
	 */
	private $taxationFileContent;
	
	/**
	 * 
	 */
	private $taxationFileSuffix;
	
	/**
	 * 
	 */
	private $threeInOneFileContent;
	
	/**
	 * 
	 */
	private $threeInOneFileSuffix;
	
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
	
	public function getBusinessLincenseFileContent() {
		return $this->businessLincenseFileContent;
	}
	
	public function setBusinessLincenseFileContent($businessLincenseFileContent) {
		$this->businessLincenseFileContent = $businessLincenseFileContent;
		$this->apiParams["businessLincenseFileContent"] = $businessLincenseFileContent;
	}
	
	public function getBusinessLincenseFileSuffix() {
		return $this->businessLincenseFileSuffix;
	}
	
	public function setBusinessLincenseFileSuffix($businessLincenseFileSuffix) {
		$this->businessLincenseFileSuffix = $businessLincenseFileSuffix;
		$this->apiParams["businessLincenseFileSuffix"] = $businessLincenseFileSuffix;
	}
	
	public function getCertificateType() {
		return $this->certificateType;
	}
	
	public function setCertificateType($certificateType) {
		$this->certificateType = $certificateType;
		$this->apiParams["certificateType"] = $certificateType;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getOrgCodeFileContent() {
		return $this->orgCodeFileContent;
	}
	
	public function setOrgCodeFileContent($orgCodeFileContent) {
		$this->orgCodeFileContent = $orgCodeFileContent;
		$this->apiParams["orgCodeFileContent"] = $orgCodeFileContent;
	}
	
	public function getOrgCodeFileSuffix() {
		return $this->orgCodeFileSuffix;
	}
	
	public function setOrgCodeFileSuffix($orgCodeFileSuffix) {
		$this->orgCodeFileSuffix = $orgCodeFileSuffix;
		$this->apiParams["orgCodeFileSuffix"] = $orgCodeFileSuffix;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getScreenshotFileContent() {
		return $this->screenshotFileContent;
	}
	
	public function setScreenshotFileContent($screenshotFileContent) {
		$this->screenshotFileContent = $screenshotFileContent;
		$this->apiParams["screenshotFileContent"] = $screenshotFileContent;
	}
	
	public function getScreenshotFileSuffix() {
		return $this->screenshotFileSuffix;
	}
	
	public function setScreenshotFileSuffix($screenshotFileSuffix) {
		$this->screenshotFileSuffix = $screenshotFileSuffix;
		$this->apiParams["screenshotFileSuffix"] = $screenshotFileSuffix;
	}
	
	public function getSourceName() {
		return $this->sourceName;
	}
	
	public function setSourceName($sourceName) {
		$this->sourceName = $sourceName;
		$this->apiParams["sourceName"] = $sourceName;
	}
	
	public function getSubject() {
		return $this->subject;
	}
	
	public function setSubject($subject) {
		$this->subject = $subject;
		$this->apiParams["subject"] = $subject;
	}
	
	public function getTaxationFileContent() {
		return $this->taxationFileContent;
	}
	
	public function setTaxationFileContent($taxationFileContent) {
		$this->taxationFileContent = $taxationFileContent;
		$this->apiParams["taxationFileContent"] = $taxationFileContent;
	}
	
	public function getTaxationFileSuffix() {
		return $this->taxationFileSuffix;
	}
	
	public function setTaxationFileSuffix($taxationFileSuffix) {
		$this->taxationFileSuffix = $taxationFileSuffix;
		$this->apiParams["taxationFileSuffix"] = $taxationFileSuffix;
	}
	
	public function getThreeInOneFileContent() {
		return $this->threeInOneFileContent;
	}
	
	public function setThreeInOneFileContent($threeInOneFileContent) {
		$this->threeInOneFileContent = $threeInOneFileContent;
		$this->apiParams["threeInOneFileContent"] = $threeInOneFileContent;
	}
	
	public function getThreeInOneFileSuffix() {
		return $this->threeInOneFileSuffix;
	}
	
	public function setThreeInOneFileSuffix($threeInOneFileSuffix) {
		$this->threeInOneFileSuffix = $threeInOneFileSuffix;
		$this->apiParams["threeInOneFileSuffix"] = $threeInOneFileSuffix;
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
		return 'suning.custom.signature.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->certificateType, 'certificateType');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->remark, 'remark');
		RequestCheckUtil::checkNotNull($this->sourceName, 'sourceName');
		RequestCheckUtil::checkNotNull($this->subject, 'subject');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
	}
	
	public function getBizName(){
		return "addSignature";
	}
	
}

?>