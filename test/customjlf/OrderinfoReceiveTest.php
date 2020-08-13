<?php
/**
 * 
 *
 * @author suning
 * @date   2019-10-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new OrderinfoReceiveRequest();
//赋值……
$req->setCfOrderId("123456789");
$req->setOrderDate("2013-06-28");
$req->setOrderTime("15:00:00");
$req->setOrderSource("B2C");
$req->setSalePlatform("DJ");
$req->setOrderChannel("PC");
$req->setOrderMemo("需要送货");
$req->setOrderItemQty("99");
$cfTradePays = new CfTradePays();
$cfTradePays->setParentPaymentCode("50");
$cfTradePays->setPaymentCode("5002");
$cfTradePays->setTotalPayAmount("10.00");
$req->setCfTradePays(array($cfTradePays));
$req->setPayItemQty("99");
$req->setOrderSaleTotalAmt("12000");
$req->setRealPayAmt("12000");
$req->setTotalSrvFee("12000");
$req->setTotalTax("12");
$req->setTotalShippingFee("12000");
$req->setOrderSerialNumber("1");
$cfOrderPays = new CfOrderPays();
$cfOrderPays->setParentPayCode("50");
$cfOrderPays->setPayCode("5002");
$cfOrderPays->setPayName("电子礼金券");
$cfOrderPays->setPayDate("2012-05-23");
$cfOrderPays->setPayTime("15:00:00");
$cfOrderPays->setPayAmount("1234.00");
$cfLogistics = new CfLogistics();
$cfLogistics->setHopeArrivalDate("2012-05-23");
$cfLogistics->setHopeArrivalTime("15:00:00");
$cfLogistics->setVerifyCode("5123");
$cfTransactions = new CfTransactions();
$cfTransactions->setConsignee("孙一二");
$cfTransactions->setMobPhoneNum("13588888888");
$cfTransactions->setDeliveryAddrMain("南京市白下区淮宁电器大厦18F");
$cfTransactions->setLatitude("1");
$cfTransactions->setLongitude("1");
$cfOrders = new CfOrders();
$cfOrders->setCfOrderItemId("12345678901");
$cfOrders->setStoreCode("8884");
$cfOrders->setCmmdtyCode("101002405");
$cfOrders->setCmmdtyName("sony彩电");
$cfOrders->setPrice("12000");
$cfOrders->setSaleQty("12000");
$cfOrders->setTotalAmount("12000");
$cfOrders->setCouponTotalMoney("12000");
$cfOrders->setManagerCardMoney("12000");
$cfOrders->setPointAmount("12000");
$cfOrders->setPointMoney("12.00");
$cfOrders->setVoucherTotalMoney("500.00");
$cfOrders->setWeight("12.12");
$cfOrders->setBasicFee("12000");
$cfOrders->setContinuousFee("12000");
$cfOrders->setCfTransactions(array($cfTransactions));
$cfOrders->setCfLogistics($cfLogistics);
$cfOrders->setCfOrderPays(array($cfOrderPays));
$cfOrders->setSrvFee("12000");
$cfOrders->setTransportFee("12000");
$cfOrders->setItemTaxFare("12.12");
$req->setCfOrders(array($cfOrders));

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