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
$req = new TcballipayConfirmRequest();
//赋值……
$orderItemList = new OrderItemList();
$orderItemList->setItemTotalFee("10.10");
$orderItemList->setOrderItemNumer("31381824805");
$tcbAlipay = new TcbAlipay();
$tcbAlipay->setBody("苏宁易购商品");
$tcbAlipay->setChannelType("1.PC ，2.H5 ，3.SDK，4.TV，6.BDXCX（百度小程序），8.TTXCX（头条小程序）");
$tcbAlipay->setClientInfo("MOBILE|01|01|5.4.1|苹果6");
$tcbAlipay->setDisablePaymethod("pcredit^moneyFund或pcredit,moneyFun");
$tcbAlipay->setEnablePaymethod("pcredit,moneyFund,debitCardExpress");
$tcbAlipay->setFrontReturnUrl("{pc:http://www.suning.com,wap:http://www.suning.com,tv:http://www.suning.com}");
$tcbAlipay->setGoodsType("1：实物类商品，0：虚拟类商品");
$tcbAlipay->setOrderItemList(array($orderItemList));
$tcbAlipay->setOrderNumer("31381068849");
$tcbAlipay->setOrderTime("20180910152946，格式yyyyMMdd HHmmss");
$tcbAlipay->setPayTimeout("1d");
$tcbAlipay->setTotalFee("10001.00");
$req->setTcbAlipay($tcbAlipay);

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