<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-22
 */
class PicdirectoryDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $dirCode;
	
	public function getDirCode() {
		return $this->dirCode;
	}
	
	public function setDirCode($dirCode) {
		$this->dirCode = $dirCode;
		$this->apiParams["dirCode"] = $dirCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picdirectory.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dirCode, 'dirCode');
	}
	
	public function getBizName(){
		return "deletePicdirectory";
	}
	
}

?>