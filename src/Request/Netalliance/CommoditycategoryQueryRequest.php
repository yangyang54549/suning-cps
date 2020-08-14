<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;

class CommoditycategoryQueryRequest  extends SuningRequest{

    private $apiParams = array();

    private $grade;

    private $parentId;

	public function setCommoditycategoryList() {
		$this->apiParams["commoditycategoryList"] = $this->apiParams;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.commoditycategory.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryCommoditycategory";
	}

    public function getGrade() {
        return $this->grade;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
        $this->apiParams["grade"] = $grade;
    }

    public function getParentId() {
        return $this->parentId;
    }

    public function setParentId($parentId) {
        $this->parentId = $parentId;
        $this->apiParams["parentId"] = $parentId;
    }
}