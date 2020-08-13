<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-3
 */
class IsvcrowdstrategyCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $crowdId;
	
	/**
	 * 
	 */
	private $description;
	
	/**
	 * 
	 */
	private $name;
	
	public function getCrowdId() {
		return $this->crowdId;
	}
	
	public function setCrowdId($crowdId) {
		$this->crowdId = $crowdId;
		$this->apiParams["crowdId"] = $crowdId;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
		$this->apiParams["description"] = $description;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.isvcrowdstrategy.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->crowdId, 'crowdId');
		RequestCheckUtil::checkNotNull($this->name, 'name');
	}
	
	public function getBizName(){
		return "createIsvcrowdstrategy";
	}
	
}

?>