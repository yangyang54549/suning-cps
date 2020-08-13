<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class reSmsSendRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $countryCode;
	
	/**
	 * 
	 */
	private $externalMsgId;
	
	/**
	 * 
	 */
	private $gcsmsParams;
	
	/**
	 * 
	 */
	private $mobile;
	
	/**
	 * 
	 */
	private $needMatch;
	
	/**
	 * 
	 */
	private $signature;
	
	/**
	 * 
	 */
	private $smsAppCode;
	
	/**
	 * 
	 */
	private $smsAppSecret;
	
	/**
	 * 
	 */
	private $templateCode;
	
	public function getCountryCode() {
		return $this->countryCode;
	}
	
	public function setCountryCode($countryCode) {
		$this->countryCode = $countryCode;
		$this->apiParams["countryCode"] = $countryCode;
	}
	
	public function getExternalMsgId() {
		return $this->externalMsgId;
	}
	
	public function setExternalMsgId($externalMsgId) {
		$this->externalMsgId = $externalMsgId;
		$this->apiParams["externalMsgId"] = $externalMsgId;
	}
	
	public function getGcsmsParams() {
		return $this->gcsmsParams;
	}
	
	public function setGcsmsParams($gcsmsParams) {
		$this->gcsmsParams = $gcsmsParams;
		$this->apiParams["gcsmsParams"] = $gcsmsParams;
	}
	
	public function getMobile() {
		return $this->mobile;
	}
	
	public function setMobile($mobile) {
		$this->mobile = $mobile;
		$this->apiParams["mobile"] = $mobile;
	}
	
	public function getNeedMatch() {
		return $this->needMatch;
	}
	
	public function setNeedMatch($needMatch) {
		$this->needMatch = $needMatch;
		$this->apiParams["needMatch"] = $needMatch;
	}
	
	public function getSignature() {
		return $this->signature;
	}
	
	public function setSignature($signature) {
		$this->signature = $signature;
		$this->apiParams["signature"] = $signature;
	}
	
	public function getSmsAppCode() {
		return $this->smsAppCode;
	}
	
	public function setSmsAppCode($smsAppCode) {
		$this->smsAppCode = $smsAppCode;
		$this->apiParams["smsAppCode"] = $smsAppCode;
	}
	
	public function getSmsAppSecret() {
		return $this->smsAppSecret;
	}
	
	public function setSmsAppSecret($smsAppSecret) {
		$this->smsAppSecret = $smsAppSecret;
		$this->apiParams["smsAppSecret"] = $smsAppSecret;
	}
	
	public function getTemplateCode() {
		return $this->templateCode;
	}
	
	public function setTemplateCode($templateCode) {
		$this->templateCode = $templateCode;
		$this->apiParams["templateCode"] = $templateCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.sms.send';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->mobile, 'mobile');
		RequestCheckUtil::checkNotNull($this->signature, 'signature');
		RequestCheckUtil::checkNotNull($this->smsAppCode, 'smsAppCode');
		RequestCheckUtil::checkNotNull($this->smsAppSecret, 'smsAppSecret');
		RequestCheckUtil::checkNotNull($this->templateCode, 'templateCode');
	}
	
	public function getBizName(){
		return "resendSms";
	}
	
}

?>