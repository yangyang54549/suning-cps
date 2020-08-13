<?php
/**
 * 
 *
 * @author suning
 * @date   2020-1-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new BillReceiveRequest();
//赋值……
$billDetailReqItemList = new BillDetailReqItemList();
$billDetailReqItemList->setBillDate("2019-09-15");
$billDetailReqItemList->setClearAmount("55.00");
$billDetailReqItemList->setClearDate("2019-09-15");
$billDetailReqItemList->setCmmdtyCode("761109110");
$billDetailReqItemList->setComment("贵重物品、轻拿轻放。");
$billDetailReqItemList->setGoodsAmount("50.00");
$billDetailReqItemList->setOrderId("MM000009847614");
$billDetailReqItemList->setOrderItemId("00113150469201");
$billDetailReqItemList->setPlatformDiscountAmount("5.00");
$billDetailReqItemList->setPlatformUsageDiscount("5.00");
$billDetailReqItemList->setPlatformUsageFee("2.00");
$billDetailReqItemList->setPromotionDiscount("2.00");
$billDetailReqItemList->setPromotionFee("1.00");
$billDetailReqItemList->setReceiveTime("2019-09-15");
$billDetailReqItemList->setSettlementCommission("2.00");
$billDetailReqItemList->setSettlementDifference("2.00");
$billDetailReqItemList->setSettlementPrice("56.00");
$billDetailReqItemList->setSnCmmdtyCode("11051100963");
$billDetailReqItemList->setSnCmmdtyName("海尔空调999");
$billDetailReqItemList->setSuningDiscountAmount("5.00");
$billDetailReqItemList->setSupplierCode("0000000000");
$billDetailReqItemList->setTradeType("1：正向，-1：逆向");
$billDetailReqItemList->setTransportFee("10.00");
$req->setBillDetailReqItemList(array($billDetailReqItemList));

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