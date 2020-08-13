<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new PointlockCancelRequest();
//赋值……
$orderStructList = new OrderStructList();
$orderStructList->setBranch("12");
$orderStructList->setOrderItemId("12");
$orderStructList->setOrderType("21");
$orderStructList->setStore("12");
$accountStruct = new AccountStruct();
$accountStruct->setOperator("123");
$accountStruct->setOrderStructList(array($orderStructList));
$accountStruct->setUniteOrderId("112");
$req->setAccountStruct($accountStruct);
$req->setAppCode("11");
$req->setBeginRecNum("0");
$req->setCustNum("1222");
$req->setEcoType("111");
$req->setGetRecNum("10");
$req->setSourceChannel("111");
$req->setSourceSystemNo("11111");
$req->setTranTimestamp("156000000");

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