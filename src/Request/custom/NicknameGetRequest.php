<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-18
 */
class NicknameGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNum;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.nickname.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
	}
	
	public function getBizName(){
		return "getNickname";
	}
	
}

?>