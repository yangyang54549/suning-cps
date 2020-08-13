<?php
/**
 * 
 *
 * @author suning
 * @date   2020-5-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new BtborderbysupplymodeCreateRequest();
//赋值……
$req->setAppId("111111");
$req->setCreator("张三");
$orderDelivery = new OrderDelivery();
$orderDelivery->setReceiverCity("025");
$orderDelivery->setReceiverDetailAddress("苏宁大道");
$orderDelivery->setReceiverDistrict("01");
$orderDelivery->setReceiverMobile("18066118801");
$orderDelivery->setReceiverName("张三");
$orderDelivery->setReceiverProvince("100");
$orderDelivery->setReceiverTelephone("021-66881112");
$orderDelivery->setReceiverTown("01");
$req->setOrderDelivery($orderDelivery);
$orderItems = new OrderItems();
$orderItems->setCmmdtyCode("000000000102556513");
$orderItems->setFreight("15");
$orderItems->setQuantity("1");
$orderItems->setSupplierCode("006644221");
$orderItems->setUnitPrice("100");
$req->setOrderItems(array($orderItems));
$req->setRemark("备注");
$req->setStoreCode("59021");
$req->setSubmitType("102");
$req->setSupplyMode("1");

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