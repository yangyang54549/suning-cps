<?php
/**
 * 
 *
 * @author suning
 * @date   2019-4-9
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new TcbwechatpayConfirmRequest();
//赋值……
$orderItemList = new OrderItemList();
$orderItemList->setItemTotalAmount("1.11");
$orderItemList->setOrderItemNumer("31381824805");
$orderItemList->setPrice("1.00");
$orderItemList->setQuantity("2");
$tcbwechatpay = new Tcbwechatpay();
$tcbwechatpay->setChannelType("1.PC ，2.微信公众号 ，3.SDK，4.TV，5.微信小程序 ，7.H5");
$tcbwechatpay->setClientInfo(" MOBILE|01|01|5.4.1|苹果6，当channelType 传SDK时必填，联系苏宁端分配");
$tcbwechatpay->setDeviceInfo("自定义参数，可以为终端设备号(门店号或收银设备ID)，PC网页或公众号内支付可以传WEB");
$tcbwechatpay->setExtraContent("{appId:wxd678efh567hg6787,mchId:1230000109,openId:oUpF8uMuAJO_M2pxb1Q9zNjWeS6o,tradeType:JSAPI}");
$tcbwechatpay->setIpAddress("192.1.1.1");
$tcbwechatpay->setLimitPay("1");
$tcbwechatpay->setMerchantName("苏宁易购商品");
$tcbwechatpay->setOrderItemList(array($orderItemList));
$tcbwechatpay->setOrderNumer("31381068849");
$tcbwechatpay->setOrderTime("20180818081811，时间格式为:yyyyMMddHHmmss");
$tcbwechatpay->setReturnUrl("{pc:http://www.suning.com,wap:http://www.suning.com,tv:http://www.suning.com}");
$tcbwechatpay->setTotalAmount("1000.10");
$req->setTcbwechatpay($tcbwechatpay);

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