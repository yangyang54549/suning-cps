<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-22
 */
class PicdirectoryQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $parentDirCode;
	
	
	
	public function getParentDirCode() {
		return $this->parentDirCode;
	}
	
	public function setParentDirCode($parentDirCode) {
		$this->parentDirCode = $parentDirCode;
		$this->apiParams["parentDirCode"] = $parentDirCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picdirectory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryPicdirectory";
	}
	
}

?>