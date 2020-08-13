<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-21
 */
class UploadfileCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $file;
	
	/**
	 * 
	 */
	private $fileName;
	
	/**
	 * 
	 */
	private $filePath;
	
	public function getFile() {
		return $this->file;
	}
	
	public function setFile($file) {
		$this->file = $file;
		$this->apiParams["file"] = $file;
	}
	
	public function getFileName() {
		return $this->fileName;
	}
	
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		$this->apiParams["fileName"] = $fileName;
	}
	
	public function getFilePath() {
		return $this->filePath;
	}
	
	public function setFilePath($filePath) {
		$this->filePath = $filePath;
		$this->apiParams["filePath"] = $filePath;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.uploadfile.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->file, 'file');
		RequestCheckUtil::checkNotNull($this->fileName, 'fileName');
		RequestCheckUtil::checkNotNull($this->filePath, 'filePath');
	}
	
	public function getBizName(){
		return "createUploadfile";
	}
	
}

?>