<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-21
 */
class SuncodeCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $pageUrl;
	
	/**
	 * 
	 */
	private $posterHeight;
	
	/**
	 * 
	 */
	private $posterUrl;
	
	/**
	 * 
	 */
	private $posterWith;
	
	/**
	 * 
	 */
	private $sceneParam;
	
	/**
	 * 
	 */
	private $sunCodeX;
	
	/**
	 * 
	 */
	private $sunCodeY;
	
	/**
	 * 
	 */
	private $width;
	
	/**
	 * 
	 */
	private $showExpireDate;
	
	public function getPageUrl() {
		return $this->pageUrl;
	}
	
	public function setPageUrl($pageUrl) {
		$this->pageUrl = $pageUrl;
		$this->apiParams["pageUrl"] = $pageUrl;
	}
	
	public function getPosterHeight() {
		return $this->posterHeight;
	}
	
	public function setPosterHeight($posterHeight) {
		$this->posterHeight = $posterHeight;
		$this->apiParams["posterHeight"] = $posterHeight;
	}
	
	public function getPosterUrl() {
		return $this->posterUrl;
	}
	
	public function setPosterUrl($posterUrl) {
		$this->posterUrl = $posterUrl;
		$this->apiParams["posterUrl"] = $posterUrl;
	}
	
	public function getPosterWith() {
		return $this->posterWith;
	}
	
	public function setPosterWith($posterWith) {
		$this->posterWith = $posterWith;
		$this->apiParams["posterWith"] = $posterWith;
	}
	
	public function getSceneParam() {
		return $this->sceneParam;
	}
	
	public function setSceneParam($sceneParam) {
		$this->sceneParam = $sceneParam;
		$this->apiParams["sceneParam"] = $sceneParam;
	}
	
	public function getSunCodeX() {
		return $this->sunCodeX;
	}
	
	public function setSunCodeX($sunCodeX) {
		$this->sunCodeX = $sunCodeX;
		$this->apiParams["sunCodeX"] = $sunCodeX;
	}
	
	public function getSunCodeY() {
		return $this->sunCodeY;
	}
	
	public function setSunCodeY($sunCodeY) {
		$this->sunCodeY = $sunCodeY;
		$this->apiParams["sunCodeY"] = $sunCodeY;
	}
	
	public function getWidth() {
		return $this->width;
	}
	
	public function setWidth($width) {
		$this->width = $width;
		$this->apiParams["width"] = $width;
	}
	
	public function getShowExpireDate() {
		return $this->showExpireDate;
	}
	
	public function setShowExpireDate($showExpireDate) {
		$this->showExpireDate = $showExpireDate;
		$this->apiParams["showExpireDate"] = $showExpireDate;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.suncode.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageUrl, 'pageUrl');
		RequestCheckUtil::checkNotNull($this->sceneParam, 'sceneParam');
		RequestCheckUtil::checkNotNull($this->width, 'width');
	}
	
	public function getBizName(){
		return "createSuncode";
	}
	
}

?>