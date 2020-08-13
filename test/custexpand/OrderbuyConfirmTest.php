<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new OrderbuyConfirmRequest();
//赋值……
$req->setCardType("cardType");
$req->setCustNum("custNum");
$req->setDeviceId("deviceId");
$req->setEcoType("ecoType");
$req->setInvokerCode("调用方编码");
$req->setOrderId("orderId");
$payItem = new PayItem();
$payItem->setPayMode("payMode");
$payItem->setPayMoney("payMoney");
$dealItem = new DealItem();
$dealItem->setDealType("dealType");
$dealItem->setDealTypeFlag("dealTypeFlag");
$dealItem->setPromotionNum("promotionNum");
$orderItem = new OrderItem();
$orderItem->setActivityType("activityType");
$orderItem->setBranch("branch");
$orderItem->setCmdtyBrand("cmdtyBrand");
$orderItem->setCmdtyCatalog("cmdtyCatalog");
$orderItem->setCmdtyCode("cmdtyCode");
$orderItem->setCmdtyCount("cmdtyCount");
$orderItem->setCmdtyGroup("cmdtyGroup");
$orderItem->setCmdtyName("cmdtyName");
$orderItem->setCouponTotalMoney("couponTotalMoney");
$orderItem->setDealItem(array($dealItem));
$orderItem->setDistChannel("distChannel");
$orderItem->setGiftCardMoney("giftCardMoney");
$orderItem->setInvoiceType("invoiceType");
$orderItem->setManagerCardMoney("managerCardMoney");
$orderItem->setOrderAmt("orderAmt");
$orderItem->setOrderItemId("orderItemId");
$orderItem->setOrderItemType("orderItemType");
$orderItem->setOrderType("orderType");
$orderItem->setOrderTypeDesc("orderTypeDesc");
$orderItem->setPayItem(array($payItem));
$orderItem->setPayTime("payTime");
$orderItem->setPointMoney("pointMoney");
$orderItem->setPurchaseFlag("purchaseFlag");
$orderItem->setServiceFee("serviceFee");
$orderItem->setStaffNum("staffNum");
$orderItem->setStockArea("stockArea");
$orderItem->setStore("store");
$orderItem->setSupplierCode("supplierCode");
$orderItem->setSupplierType("supplierType");
$orderItem->setTransportFee("transportFee");
$req->setOrderItem(array($orderItem));
$req->setOrderSubmitTime("orderSubmitTime");
$req->setSceneType("sceneType");
$req->setTransId("transId");

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