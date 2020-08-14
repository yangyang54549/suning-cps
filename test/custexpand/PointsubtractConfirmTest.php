<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new PointsubtractConfirmRequest();
//赋值……
$subtractStructList = new SubtractStructList();
$subtractStructList->setAccountSubAmt("12.30");
$subtractStructList->setAccountType("11");
$orderStructList = new OrderStructList();
$orderStructList->setBranch("11");
$orderStructList->setCmmdtyBrand("12");
$orderStructList->setCmmdtyCatalog("11");
$orderStructList->setCmmdtyCode("11");
$orderStructList->setCmmdtyGroup("11");
$orderStructList->setCmmdtyName("12");
$orderStructList->setOrderAmt("254.60");
$orderStructList->setOrderItemId("11");
$orderStructList->setOrderType("11");
$orderStructList->setOrderTypeDesc("11");
$orderStructList->setStore("11");
$orderStructList->setSubtractStructList(array($subtractStructList));
$orderStructList->setSupplierCode("11");
$orderStructList->setSupplierType("11");
$accountStruct = new AccountStruct();
$accountStruct->setOperator("11");
$accountStruct->setOrderStructList(array($orderStructList));
$accountStruct->setUniteOrderId("11");
$req->setAccountStruct($accountStruct);
$req->setAppCode("oms");
$req->setBeginRecNum("0");
$req->setCustNum("11");
$req->setEcoType("11");
$req->setGetRecNum("1");
$req->setSourceChannel("113.194.18.7");
$req->setSourceSystemNo("139000000070");
$req->setTranTimestamp("1562862504858");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
$reqJson = getReqJson($req);
print_r("请求报文:\n".$reqJson);
print_r("\n返回响应报文:\n".$resp);

function getReqJson($req){
	$paramsArray = $req -> getApiParams();
	if(empty($paramsArray)){
		$paramsArray = '';
	}
	$paramsArray = array('sn_request' => array('sn_body' => array(
		"{$req -> getBizName()}" => $paramsArray
	)));
	return json_encode($paramsArray);
}
?>