<?php
/**
 * 
 *
 * @author suning
 * @date   2019-7-17
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new LognumsubmitAddRequest();
//赋值……
$req->setOrderId("100000100025");
$orderItemIds = new OrderItemIds();
$orderItemIds->setExpressCompanyName("顺丰");
$orderItemIds->setExpressOrderId("342345545623");
$orderItemIds->setOrderItemId("10000010002501");
$orderItemIds->setSheetId("20190101502224456787");
$orderItemIds->setSkuId("121345091");
$req->setOrderItemIds(array($orderItemIds));
$req->setServiceType("1");

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