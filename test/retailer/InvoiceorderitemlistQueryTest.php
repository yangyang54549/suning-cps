<?php
/**
 * 
 *
 * @author suning
 * @date   2020-3-30
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new InvoiceorderitemlistQueryRequest();
//赋值……
$req->setAppId("appId");
$invoiceOrderItemQueryReqDto = new InvoiceOrderItemQueryReqDto();
$invoiceOrderItemQueryReqDto->setBtcOrderId("btcOrderId");
$invoiceOrderItemQueryReqDto->setCmmdtyCode("cmmdtyCode");
$invoiceOrderItemQueryReqDto->setCmmdtyName("cmmdtyName");
$invoiceOrderItemQueryReqDto->setCreator("creator");
$invoiceOrderItemQueryReqDto->setEndTime("endTime");
$invoiceOrderItemQueryReqDto->setLinkerMobile("linkerMobile");
$invoiceOrderItemQueryReqDto->setOmsOrderId("omsOrderId");
$invoiceOrderItemQueryReqDto->setOmsOrderItemId("omsOrderItemId");
$invoiceOrderItemQueryReqDto->setOrderId("orderId");
$invoiceOrderItemQueryReqDto->setPlatformCode("platformCode");
$invoiceOrderItemQueryReqDto->setSnCustNum("snCustNum");
$invoiceOrderItemQueryReqDto->setStartTime("startTime");
$invoiceOrderItemQueryReqDto->setSubmitTypeInvoice("submitTypeInvoice");
$req->setInvoiceOrderItemQueryReqDto($invoiceOrderItemQueryReqDto);
$queryParam = new QueryParam();
$queryParam->setCorderBy("orderBy");
$queryParam->setPnumber("pageNumber");
$queryParam->setPsize("pageSize");
$req->setQueryParam($queryParam);

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