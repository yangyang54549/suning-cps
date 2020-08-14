<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;

/**
 * @date   2020-4-26
 */
class MycommodityselectgroupQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $pageIndex;
	
	/**
	 * 
	 */
	private $size;
	
	public function getPageIndex() {
		return $this->pageIndex;
	}
	
	public function setPageIndex($pageIndex) {
		$this->pageIndex = $pageIndex;
		$this->apiParams["pageIndex"] = $pageIndex;
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function setSize($size) {
		$this->size = $size;
		$this->apiParams["size"] = $size;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.mycommodityselectgroup.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryMycommodityselectgroup";
	}
	
}

