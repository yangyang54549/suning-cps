<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-5-22
 */
class ShoppingcartCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $chan;
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $cmmdtyName;
	
	/**
	 * 
	 */
	private $cmmdtyQty;
	
	/**
	 * 
	 */
	private $operationEquipment;
	
	/**
	 * 
	 */
	private $operationTerminal;
	
	/**
	 * 
	 */
	private $overSeasFlag;
	
	/**
	 * 
	 */
	private $snUnionId;
	
	/**
	 * 
	 */
	private $tickStatus;
	
	/**
	 * 
	 */
	private $xzActivityId;
	
	public function getChan() {
		return $this->chan;
	}
	
	public function setChan($chan) {
		$this->chan = $chan;
		$this->apiParams["chan"] = $chan;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}
	
	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
	}
	
	public function getCmmdtyQty() {
		return $this->cmmdtyQty;
	}
	
	public function setCmmdtyQty($cmmdtyQty) {
		$this->cmmdtyQty = $cmmdtyQty;
		$this->apiParams["cmmdtyQty"] = $cmmdtyQty;
	}
	
	public function getOperationEquipment() {
		return $this->operationEquipment;
	}
	
	public function setOperationEquipment($operationEquipment) {
		$this->operationEquipment = $operationEquipment;
		$this->apiParams["operationEquipment"] = $operationEquipment;
	}
	
	public function getOperationTerminal() {
		return $this->operationTerminal;
	}
	
	public function setOperationTerminal($operationTerminal) {
		$this->operationTerminal = $operationTerminal;
		$this->apiParams["operationTerminal"] = $operationTerminal;
	}
	
	public function getOverSeasFlag() {
		return $this->overSeasFlag;
	}
	
	public function setOverSeasFlag($overSeasFlag) {
		$this->overSeasFlag = $overSeasFlag;
		$this->apiParams["overSeasFlag"] = $overSeasFlag;
	}
	
	public function getSnUnionId() {
		return $this->snUnionId;
	}
	
	public function setSnUnionId($snUnionId) {
		$this->snUnionId = $snUnionId;
		$this->apiParams["snUnionId"] = $snUnionId;
	}
	
	public function getTickStatus() {
		return $this->tickStatus;
	}
	
	public function setTickStatus($tickStatus) {
		$this->tickStatus = $tickStatus;
		$this->apiParams["tickStatus"] = $tickStatus;
	}
	
	public function getXzActivityId() {
		return $this->xzActivityId;
	}
	
	public function setXzActivityId($xzActivityId) {
		$this->xzActivityId = $xzActivityId;
		$this->apiParams["xzActivityId"] = $xzActivityId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shoppingcart.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chan, 'chan');
		RequestCheckUtil::checkNotNull($this->cmmdtyCode, 'cmmdtyCode');
		RequestCheckUtil::checkNotNull($this->cmmdtyName, 'cmmdtyName');
		RequestCheckUtil::checkNotNull($this->cmmdtyQty, 'cmmdtyQty');
		RequestCheckUtil::checkNotNull($this->operationEquipment, 'operationEquipment');
		RequestCheckUtil::checkNotNull($this->operationTerminal, 'operationTerminal');
		RequestCheckUtil::checkNotNull($this->snUnionId, 'snUnionId');
		RequestCheckUtil::checkNotNull($this->tickStatus, 'tickStatus');
		RequestCheckUtil::checkNotNull($this->xzActivityId, 'xzActivityId');
	}
	
	public function getBizName(){
		return "createShoppingcart";
	}
	
}

?>