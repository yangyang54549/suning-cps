<?php
/**
 * 
 *
 * @author suning
 * @date   2019-7-29
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new BtborderCreateRequest();
//赋值……
$req->setAppId("666666");
$req->setChannelCode("19541");
$orderDelivery = new OrderDelivery();
$orderDelivery->setBuyerAddress("江苏省南京市玄武区玄武大道1号");
$orderDelivery->setCityCode("025");
$orderDelivery->setDistrictCode("01");
$orderDelivery->setProvinceCode("100");
$orderDelivery->setReceiverName("张三");
$orderDelivery->setReceiverPhone("18632486868");
$orderDelivery->setTownCode("01");
$req->setOrderDelivery($orderDelivery);
$orderInvoice = new OrderInvoice();
$orderInvoice->setInvoiceAddress("江苏省南京市玄武区玄武大道1号");
$orderInvoice->setInvoiceReceiverName("张三");
$orderInvoice->setInvoiceReceiverPhone("135889088765");
$orderInvoice->setInvoiceTitle("个人");
$orderInvoice->setInvoiceTitleType("1");
$orderInvoice->setInvoiceType("1");
$orderInvoice->setTaxPayerNo("122021154545x");
$req->setOrderInvoice($orderInvoice);
$orderItemList = new OrderItemList();
$orderItemList->setBookTimeDetail("2018-07-01");
$orderItemList->setCmmdtyCode("000000000102556513");
$orderItemList->setDistributorCode("0000000000");
$orderItemList->setHopeArrivalTime("2018-08-30");
$orderItemList->setInstallFlag("0");
$orderItemList->setItemTotalFare("24.00");
$orderItemList->setOuterOrderItemNo("B20190505180001021");
$orderItemList->setPrice("2000.00");
$orderItemList->setQuantity("1");
$orderItemList->setServiceCmmdtyCode("000000000102556513");
$req->setOrderItemList(array($orderItemList));
$req->setOuterOrderNo("B2019050518000801");
$req->setPayWay("9");
$req->setRemark("备注信息");
$req->setStoreCode("59021");

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