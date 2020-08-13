<?php
/**
 * 
 *
 * @author suning
 * @date   2020-3-11
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new OrdersubmitCreateRequest();
//赋值……
$fullReductionInfo = new FullReductionInfo();
$fullReductionInfo->setBonusId("324425345");
$fullReductionInfo->setFullReductionAmount("20.00");
$fullReductionInfo->setPromotionNum("43242");
$fullReductionInfo->setProvider("02");
$couponInfo = new CouponInfo();
$couponInfo->setCouponAmount("2.00");
$couponInfo->setCouponCode("3221233");
$couponInfo->setCouponType("02");
$platFormOrder = new PlatFormOrder();
$platFormOrder->setActivityId("67678678787");
$platFormOrder->setCartTwoItemNo("4324242343");
$platFormOrder->setCmmdtyProperty("01");
$platFormOrder->setCouponInfo(array($couponInfo));
$platFormOrder->setFullReductionInfo(array($fullReductionInfo));
$platFormOrder->setHopeArrivalTime("2020-02-14 00:00:00");
$platFormOrder->setOrderItemId("242342423");
$platFormOrder->setOrderPayment("32.00");
$platFormOrder->setPointAmount("3.00");
$platFormOrder->setPostage("0.00");
$platFormOrder->setPrice("10.00");
$platFormOrder->setSaleNum("10");
$platFormOrder->setSkuId("4244242");
$platFormOrder->setSnSkuId("3244234234");
$platFormOrder->setTotalFee("23.00");
$platFormTrade = new PlatFormTrade();
$platFormTrade->setAccntBank("南京银行");
$platFormTrade->setBankAccntNum("6YUIOP3456789009876");
$platFormTrade->setBusinessSign("1");
$platFormTrade->setCartTwoNo("DLJA2018114812000000");
$platFormTrade->setChanId("02");
$platFormTrade->setCityName("北京市");
$platFormTrade->setDeliveryType("02");
$platFormTrade->setInvoiceContent("餐饮");
$platFormTrade->setInvoiceTitle("个人消费");
$platFormTrade->setInvoiceTitleType("02");
$platFormTrade->setInvoiceType("05");
$platFormTrade->setMapType("01");
$platFormTrade->setMemberNo("23456543");
$platFormTrade->setOrderId("123342312");
$platFormTrade->setOrderTime("2020-02-14 00:00:00");
$platFormTrade->setPayment("100.00");
$platFormTrade->setPlatFormOrder(array($platFormOrder));
$platFormTrade->setPoiId("234243");
$platFormTrade->setReceiverAddress("南京市");
$platFormTrade->setReceiverMobile("15008987656");
$platFormTrade->setReceiverName("张三");
$platFormTrade->setRegAddr("南京市白下区淮海路68号苏18F");
$platFormTrade->setRegPhone("02584418888");
$platFormTrade->setShopCode("001");
$platFormTrade->setShopName("小店");
$platFormTrade->setTaxMobilePhone("15509876789");
$platFormTrade->setTaxPayerAddr("南京市白下区淮宁电器大厦18F");
$platFormTrade->setTaxPayerName("张三");
$platFormTrade->setTaxPayerNo("SDFDFD458976");
$platFormTrade->setTaxPayerPhone("02584418888");
$req->setPlatFormTrade($platFormTrade);

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