<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-13
 */
class PictureAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $content;
	
	/**
	 * 
	 */
	private $fileName;
	
	/**
	 * 
	 */
	private $mimeType;
	
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getFileName() {
		return $this->fileName;
	}
	
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		$this->apiParams["fileName"] = $fileName;
	}
	
	public function getMimeType() {
		return $this->mimeType;
	}
	
	public function setMimeType($mimeType) {
		$this->mimeType = $mimeType;
		$this->apiParams["mimeType"] = $mimeType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.picture.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->content, 'content');
		RequestCheckUtil::checkNotNull($this->fileName, 'fileName');
		RequestCheckUtil::checkNotNull($this->mimeType, 'mimeType');
	}
	
	public function getBizName(){
		return "addPicture";
	}
	
}

?>