<?php
/**
 * 
 *
 * @author suning
 * @date   2019-4-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new TcborderCreateRequest();
//赋值……
$req->setChanId("01");
$req->setOrderId("123456789012345");
$req->setReceiverAddress("南京玄武区梅园新村街道苏宁易购(新街口店)");
$req->setReceiverCity("南京市");
$req->setReceiverCounty("玄武区");
$req->setReceiverMobile("13888888888");
$req->setReceiverName("苏宁");
$req->setReceiverNationality("中国");
$req->setReceiverPhone("025-66669999");
$req->setReceiverProvince("江苏省");
$req->setReceiverStreet("徐庄软件园");
$req->setReceiverZip("210000");
$tcbOrderItemList = new TcbOrderItemList();
$tcbOrderItemList->setOrderItemId("123456789012345");
$tcbOrderItemList->setOrderTotalFee("100.02");
$tcbOrderItemList->setOuterSkuId("0000000010210322");
$tcbOrderItemList->setPostage("0.00");
$tcbOrderItemList->setPrice("100.02");
$tcbOrderItemList->setSaleNum("1");
$tcbOrderItemList->setSkuId("565656565656");
$req->setTcbOrderItemList(array($tcbOrderItemList));
$req->setTotalFee("100.02");
$req->setTotalNo("1");

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