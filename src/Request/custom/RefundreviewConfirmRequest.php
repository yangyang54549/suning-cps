<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-7-30
 */
class RefundreviewConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $auditStatus;
	
	/**
	 * 
	 */
	private $auditTime;
	
	/**
	 * 
	 */
	private $auditUser;
	
	/**
	 * 
	 */
	private $returnApplyId;
	
	public function getAuditStatus() {
		return $this->auditStatus;
	}
	
	public function setAuditStatus($auditStatus) {
		$this->auditStatus = $auditStatus;
		$this->apiParams["auditStatus"] = $auditStatus;
	}
	
	public function getAuditTime() {
		return $this->auditTime;
	}
	
	public function setAuditTime($auditTime) {
		$this->auditTime = $auditTime;
		$this->apiParams["auditTime"] = $auditTime;
	}
	
	public function getAuditUser() {
		return $this->auditUser;
	}
	
	public function setAuditUser($auditUser) {
		$this->auditUser = $auditUser;
		$this->apiParams["auditUser"] = $auditUser;
	}
	
	public function getReturnApplyId() {
		return $this->returnApplyId;
	}
	
	public function setReturnApplyId($returnApplyId) {
		$this->returnApplyId = $returnApplyId;
		$this->apiParams["returnApplyId"] = $returnApplyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.refundreview.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->auditStatus, 'auditStatus');
		RequestCheckUtil::checkNotNull($this->auditTime, 'auditTime');
		RequestCheckUtil::checkNotNull($this->auditUser, 'auditUser');
		RequestCheckUtil::checkNotNull($this->returnApplyId, 'returnApplyId');
	}
	
	public function getBizName(){
		return "confirmRefundreview";
	}
	
}

?>