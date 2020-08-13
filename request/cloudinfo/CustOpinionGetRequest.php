<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class CustOpinionGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $chatId;
	
	public function getChatId() {
		return $this->chatId;
	}
	
	public function setChatId($chatId) {
		$this->chatId = $chatId;
		$this->apiParams["chatId"] = $chatId;
	}
	
	public function getApiMethodName(){
		return 'suning.cloudinfo.custopinion.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chatId, 'chatId');
	}
	
	public function getBizName(){
		return "getCustOpinion";
	}
	
}

?>