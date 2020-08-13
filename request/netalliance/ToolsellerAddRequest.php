<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-8-4
 */
class ToolsellerAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channel;
	
	/**
	 * 
	 */
	private $mediaCustNum;
	
	/**
	 * 
	 */
	private $phone;
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getMediaCustNum() {
		return $this->mediaCustNum;
	}
	
	public function setMediaCustNum($mediaCustNum) {
		$this->mediaCustNum = $mediaCustNum;
		$this->apiParams["mediaCustNum"] = $mediaCustNum;
	}
	
	public function getPhone() {
		return $this->phone;
	}
	
	public function setPhone($phone) {
		$this->phone = $phone;
		$this->apiParams["phone"] = $phone;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.toolseller.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channel, 'channel');
	}
	
	public function getBizName(){
		return "addToolseller";
	}
	
}

?>