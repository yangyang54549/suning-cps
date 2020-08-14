<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-3
 */
class WordsCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $img;
	
	/**
	 * 
	 */
	private $url;
	
	public function getImg() {
		return $this->img;
	}
	
	public function setImg($img) {
		$this->img = $img;
		$this->apiParams["img"] = $img;
	}
	
	public function getUrl() {
		return $this->url;
	}
	
	public function setUrl($url) {
		$this->url = $url;
		$this->apiParams["url"] = $url;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.words.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->img, 'img');
		RequestCheckUtil::checkNotNull($this->url, 'url');
	}
	
	public function getBizName(){
		return "createWords";
	}
	
}

?>