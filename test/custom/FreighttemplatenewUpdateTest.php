<?php
/**
 * 
 *
 * @author suning
 * @date   2020-7-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new FreighttemplatenewUpdateRequest();
//赋值……
$commonMap = new CommonMap();
$commonMap->setContinuedBulkFare("2.01");
$commonMap->setContinuedItem("5");
$commonMap->setContinuedItemFare("3.01");
$commonMap->setContinuedtBulk("2.01");
$commonMap->setContinuedWeight("5.01");
$commonMap->setContinuedWeightFare("2.01");
$commonMap->setFirstBulk("3.01");
$commonMap->setFirstBulkFare("10.01");
$commonMap->setFirstItem("3");
$commonMap->setFirstItemFare("10.01");
$commonMap->setFirstWeight("10.01");
$commonMap->setFirstWeightFare("3.01");
$commonMap->setFreightTemplateId("68a4edbd5cc247eab9bd112ad0776648");
$commonMap->setFreightTemplateName("模版名称");
$commonMap->setShippingType("0");
$commonMap->setSupplierType("H");
$commonMap->setTaxType("0");
$commonMap->setValuationType("0");
$req->setCommonMap($commonMap);
$specialList = new SpecialList();
$specialList->setSpeCityEnCode("000001000174,000001000175,000001000176");
$specialList->setSpeContinuedItem("10");
$specialList->setSpeContinuedItemFare("2.03");
$specialList->setSpeContinuedtBulk("5.02");
$specialList->setSpeContinuedtBulkFare("5.01");
$specialList->setSpeContinuedWeight("3.03");
$specialList->setSpeContinuedWeightFare("2.05");
$specialList->setSpeFirstBulk("10.08");
$specialList->setSpeFirstBulkFare("10.02");
$specialList->setSpeFirstItem("5");
$specialList->setSpeFirstItemFare("10.02");
$specialList->setSpeFirstWeight("5.07");
$specialList->setSpeFirstWeightFare("10.01");
$specialList->setSpeProvenCode("140,150,160");
$specialList->setSpeRenCode("243");
$req->setSpecialList(array($specialList));
$req->setVendorCode("0070057239");

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