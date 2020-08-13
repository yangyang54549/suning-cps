<?php
/**
 * 
 *
 * @author suning
 * @date   2018-10-22
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new TicketsReceiveRequest();
//赋值……
$req->setFailedCode("E001");
$req->setFailedReason("订单不存在");
$req->setOrderCode("苏宁订单号");
$req->setOrderItemCode("20180930001");
$req->setOrderStatus("1");
$req->setSuccessTime("2018-09-03 00:00:00");
$ticketList = new TicketList();
$ticketList->setPdfCode("19445");
$ticketList->setQrCode("11213554");
$ticketList->setAdditional("1123456");
$ticketList->setSerialCode("xxxxyyyyyzz");
$req->setTicketList(array($ticketList));

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