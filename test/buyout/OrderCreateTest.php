<?php
/**
 * 
 *
 * @author suning
 * @date   2019-10-17
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new OrderCreateRequest();
//赋值……
$platFormOrder = new PlatFormOrder();
$platFormOrder->setBusinessSign("0");
$platFormOrder->setOrderItemId("56789001");
$platFormOrder->setOrderPayment("123");
$platFormOrder->setOuterSkuId("4567899876");
$platFormOrder->setPostage("34");
$platFormOrder->setPrice("12");
$platFormOrder->setSaleNum("3");
$platFormOrder->setSkuId("3456789876");
$platFormOrder->setTotalFee("523");
$platFormTrade = new PlatFormTrade();
$platFormTrade->setMemberNo("13888888888");
$platFormTrade->setOrderId("4567890");
$platFormTrade->setOrderType("A001");
$platFormTrade->setPayment("100");
$platFormTrade->setPlatFormOrder(array($platFormOrder));
$platFormTrade->setReceiverAddress("门牌号93号");
$platFormTrade->setReceiverCity("南京市");
$platFormTrade->setReceiverCounty("玄武区");
$platFormTrade->setReceiverMobile("13888888888");
$platFormTrade->setReceiverName("苏宁");
$platFormTrade->setReceiverNationality("中国");
$platFormTrade->setReceiverPhone("1531-8295345");
$platFormTrade->setReceiverProvince("江苏省");
$platFormTrade->setReceiverStreet("徐庄软件园");
$platFormTrade->setReceiverZip("8876868");
$platFormTrade->setTotalNo("2");
$req->setPlatFormTrade($platFormTrade);

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