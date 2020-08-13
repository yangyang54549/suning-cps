<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-6
 */
class ListtemplateQueryRequest  extends SelectSuningRequest{
	
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
	private $appCode;
	
	/**
	 * 
	 */
	private $approved;
	
	/**
	 * 
	 */
	private $code;
	
	/**
	 * 
	 */
	private $createTimeEnd;
	
	/**
	 * 
	 */
	private $createTimeStart;
	
	/**
	 * 
	 */
	private $name;
	
	
	
	/**
	 * 
	 */
	private $smsDiffer;
	
	/**
	 * 
	 */
	private $smsType;
	
	/**
	 * 
	 */
	private $status;
	
	/**
	 * 
	 */
	private $templateType;
	
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
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getApproved() {
		return $this->approved;
	}
	
	public function setApproved($approved) {
		$this->approved = $approved;
		$this->apiParams["approved"] = $approved;
	}
	
	public function getCode() {
		return $this->code;
	}
	
	public function setCode($code) {
		$this->code = $code;
		$this->apiParams["code"] = $code;
	}
	
	public function getCreateTimeEnd() {
		return $this->createTimeEnd;
	}
	
	public function setCreateTimeEnd($createTimeEnd) {
		$this->createTimeEnd = $createTimeEnd;
		$this->apiParams["createTimeEnd"] = $createTimeEnd;
	}
	
	public function getCreateTimeStart() {
		return $this->createTimeStart;
	}
	
	public function setCreateTimeStart($createTimeStart) {
		$this->createTimeStart = $createTimeStart;
		$this->apiParams["createTimeStart"] = $createTimeStart;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	
	
	public function getSmsDiffer() {
		return $this->smsDiffer;
	}
	
	public function setSmsDiffer($smsDiffer) {
		$this->smsDiffer = $smsDiffer;
		$this->apiParams["smsDiffer"] = $smsDiffer;
	}
	
	public function getSmsType() {
		return $this->smsType;
	}
	
	public function setSmsType($smsType) {
		$this->smsType = $smsType;
		$this->apiParams["smsType"] = $smsType;
	}
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getTemplateType() {
		return $this->templateType;
	}
	
	public function setTemplateType($templateType) {
		$this->templateType = $templateType;
		$this->apiParams["templateType"] = $templateType;
	}
	
	public function getTimeStamp() {
		return $this->timeStamp;
	}
	
	public function setTimeStamp($timeStamp) {
		$this->timeStamp = $timeStamp;
		$this->apiParams["timeStamp"] = $timeStamp;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.template.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
	}
	
	public function getBizName(){
		return "queryListtemplate";
	}
	
}

?>