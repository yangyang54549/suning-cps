<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-22
 */
class PicdirectoryAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $dirName;
	
	/**
	 * 
	 */
	private $parentDirCode;
	
	public function getDirName() {
		return $this->dirName;
	}
	
	public function setDirName($dirName) {
		$this->dirName = $dirName;
		$this->apiParams["dirName"] = $dirName;
	}
	
	public function getParentDirCode() {
		return $this->parentDirCode;
	}
	
	public function setParentDirCode($parentDirCode) {
		$this->parentDirCode = $parentDirCode;
		$this->apiParams["parentDirCode"] = $parentDirCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picdirectory.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dirName, 'dirName');
	}
	
	public function getBizName(){
		return "addPicdirectory";
	}
	
}

?>