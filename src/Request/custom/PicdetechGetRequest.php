<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-10
 */
class PicdetechGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $dataId;
	
	public function getDataId() {
		return $this->dataId;
	}
	
	public function setDataId($dataId) {
		$this->dataId = $dataId;
		$this->apiParams["dataId"] = $dataId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picdetech.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dataId, 'dataId');
	}
	
	public function getBizName(){
		return "getPicdetech";
	}
	
}

?>