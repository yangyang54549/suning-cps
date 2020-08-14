<?php
/**
 * 
 *
 * @author suning
 * @date   2019-9-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new OtoinfoModifyRequest();
//赋值……
$req->setAutoRefund("0");
$req->setBookingShop("0");
$childItem = new ChildItem();
$childItem->setDeductiblePriceChild("1.00");
$childItem->setPriceChild("1.00");
$childItem->setProductCodeChild("1000000000");
$req->setChildItem(array($childItem));
$req->setDeductiblePrice("1.00");
$req->setEffectiveDay("99");
$req->setExtractMode("01,10");
$req->setInsaleRefund("0");
$req->setPayTemplate("1");
$req->setPrice("1.00");
$req->setPriceType("01");
$req->setProductCode("1");
$req->setSaleDate("2013-10-1");
$req->setSaleSet("0");
$req->setSellChannel("01");
$req->setWriteoffPayment("0");
$req->setWriteoffShop("1");

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