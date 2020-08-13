<?php
/**
 * 
 *
 * @author suning
 * @date   2019-3-5
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new ElectronicInvoiceAddRequest();
//赋值……
$req->setInvoiceAmount("开票合计金额");
$req->setInvoiceCode("1111");
$req->setInvoiceData("13v1123v3bh2h234");
$req->setInvoiceFlag("02");
$req->setInvoiceHead("苏宁易购");
$req->setInvoiceHeadType("1");
$req->setInvoiceNo("1111");
$req->setInvoiceNoTaxAmount("不含税金额");
$req->setInvoiceSecurityCode("59888 37763 38108 76652");
$req->setInvoiceTime("2016-08-01 10:10:10");
$req->setInvoiceType("1");
$req->setLogisticsComp("纸质发票存在物流公司");
$req->setLogisticsOrderId("纸质发票存在物流单号");
$req->setOldInvoiceCode("1234");
$req->setOldInvoiceNum("123");
$req->setOrderId("4511680451");
$req->setProductCode("1111");

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