<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class PictureDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $objectId;
	
	public function getObjectId() {
		return $this->objectId;
	}
	
	public function setObjectId($objectId) {
		$this->objectId = $objectId;
		$this->apiParams["objectId"] = $objectId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picture.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->objectId, 'objectId');
	}
	
	public function getBizName(){
		return "deletePicture";
	}
	
}

?>