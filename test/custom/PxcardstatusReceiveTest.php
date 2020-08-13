<?php
/**
 * 
 *
 * @author suning
 * @date   2020-6-26
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new PxcardstatusReceiveRequest();
//赋值……
$req->setAddress("XX省XX市XX区XX地方");
$req->setDeliveryDate("2020-05-26 17:00:00");
$req->setExpressCompanyCode("顺丰物流");
$req->setExpressNo("SF9994588556");
$req->setName("XXX");
$req->setOrderItemId("00120485973301");
$req->setPhoneNum("02588888888");
$req->setPickupMode("1");
$req->setPxCardId("10000011");
$req->setPxCardNo("22223334");
$req->setPxCardStatus("01");

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