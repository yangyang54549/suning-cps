<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class TemplateAddRequest  extends SuningRequest{
	
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
	private $code;
	
	/**
	 * 
	 */
	private $content;
	
	/**
	 * 
	 */
	private $description;
	
	/**
	 * 
	 */
	private $hideValue;
	
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
	
	public function getCode() {
		return $this->code;
	}
	
	public function setCode($code) {
		$this->code = $code;
		$this->apiParams["code"] = $code;
	}
	
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
		$this->apiParams["description"] = $description;
	}
	
	public function getHideValue() {
		return $this->hideValue;
	}
	
	public function setHideValue($hideValue) {
		$this->hideValue = $hideValue;
		$this->apiParams["hideValue"] = $hideValue;
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
		return 'suning.custom.template.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->accessKeyId, 'accessKeyId');
		RequestCheckUtil::checkNotNull($this->accessSign, 'accessSign');
		RequestCheckUtil::checkNotNull($this->content, 'content');
		RequestCheckUtil::checkNotNull($this->description, 'description');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->smsType, 'smsType');
		RequestCheckUtil::checkNotNull($this->templateType, 'templateType');
		RequestCheckUtil::checkNotNull($this->timeStamp, 'timeStamp');
	}
	
	public function getBizName(){
		return "addTemplate";
	}
	
}

?>