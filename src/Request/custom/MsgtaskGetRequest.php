<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-4-3
 */
class MsgtaskGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $taskId;
	
	public function getTaskId() {
		return $this->taskId;
	}
	
	public function setTaskId($taskId) {
		$this->taskId = $taskId;
		$this->apiParams["taskId"] = $taskId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.msgtask.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->taskId, 'taskId');
	}
	
	public function getBizName(){
		return "getMsgtask";
	}
	
}

?>