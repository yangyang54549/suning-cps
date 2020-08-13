<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-29
 */
class NPicAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $picContent;
	
	/**
	 * 
	 */
	private $dirCode;
	
	public function getPicContent() {
		return $this->picContent;
	}
	
	public function setPicContent($picContent) {
		$this->picContent = $picContent;
		$this->apiParams["picContent"] = $picContent;
	}
	
	public function getDirCode() {
		return $this->dirCode;
	}
	
	public function setDirCode($dirCode) {
		$this->dirCode = $dirCode;
		$this->apiParams["dirCode"] = $dirCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.npic.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->picContent, 'picContent');
	}
	
	public function getBizName(){
		return "addNPic";
	}
	
}

?>