<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-6-10
 */
class PicdetechAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $dataId;
	
	/**
	 * 
	 */
	private $picUrl;
	
	/**
	 * 
	 */
	private $serviceCode;
	
	public function getDataId() {
		return $this->dataId;
	}
	
	public function setDataId($dataId) {
		$this->dataId = $dataId;
		$this->apiParams["dataId"] = $dataId;
	}
	
	public function getPicUrl() {
		return $this->picUrl;
	}
	
	public function setPicUrl($picUrl) {
		$this->picUrl = $picUrl;
		$this->apiParams["picUrl"] = $picUrl;
	}
	
	public function getServiceCode() {
		return $this->serviceCode;
	}
	
	public function setServiceCode($serviceCode) {
		$this->serviceCode = $serviceCode;
		$this->apiParams["serviceCode"] = $serviceCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picdetech.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dataId, 'dataId');
		RequestCheckUtil::checkNotNull($this->picUrl, 'picUrl');
		RequestCheckUtil::checkNotNull($this->serviceCode, 'serviceCode');
	}
	
	public function getBizName(){
		return "addPicdetech";
	}
	
}

?>