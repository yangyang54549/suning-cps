<?php
namespace Suning\Sdk\Request\Netalliance;

use Suning\Sdk\SuningRequest;
use Suning\Sdk\RequestCheckUtil;

class BindAccountRequest  extends SuningRequest{
	
	/**
	 * 第三方系统标识。分配第三方的系统标识
	 */
	private $extSystemId;
	
	/**
	 * 第三方系统会员唯一标识。
	 */
	private $extBusRef;
	
	/**
	 * 混淆会员编号。联合登陆完成后产生的编号
	 */
	private $mixCustNum;
	
	public function getExtSystemId() {
		return $this->extSystemId;
	}
	
	public function setExtSystemId($extSystemId) {
		$this->extSystemId = $extSystemId;
		$this->apiParams["extSystemId"] = $extSystemId;
	}
	
	public function getExtBusRef() {
		return $this->extBusRef;
	}
	
	public function setExtBusRef($extBusRef) {
		$this->extBusRef = $extBusRef;
		$this->apiParams["extBusRef"] = $extBusRef;
	}
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getApiMethodName(){
		return 'suning.Netalliance.account.bind';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->extSystemId, 'extSystemId');
		RequestCheckUtil::checkNotNull($this->extBusRef, 'extBusRef');
		RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
	}
	
	public function getBizName(){
		return "bindAccount";
	}
	
}

