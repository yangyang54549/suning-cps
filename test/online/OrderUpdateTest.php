<?php
/**
 * 
 *
 * @author suning
 * @date   2020-1-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new OrderUpdateRequest();
//赋值……
$req->setOrderId("1213321");
$preferentialInfo = new PreferentialInfo();
$preferentialInfo->setPreferentialAmount("10.00");
$preferentialInfo->setPreferentialType("01");
$preferentialInfo->setProvider("02");
$orderItems = new OrderItems();
$orderItems->setOrderItemId("H04221589");
$orderItems->setPayChannelNumber("sn123456789");
$orderItems->setPayNumber("sn123456");
$orderItems->setPreferentialInfo(array($preferentialInfo));
$req->setOrderItems(array($orderItems));
$req->setOrderStatus("04");
$req->setPayDate("2019-01-25 14:25:13");

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