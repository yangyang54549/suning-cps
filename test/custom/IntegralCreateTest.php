<?php
/**
 * 
 *
 * @author suning
 * @date   2020-1-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new IntegralCreateRequest();
//赋值……
$req->setActivityName("20200101店铺积分兑换");
$req->setEndTime("2020-01-01 00:00:00");
$integralRwardInfos = new IntegralRwardInfos();
$integralRwardInfos->setConsumeIntegral("100");
$integralRwardInfos->setCustomersCode("1000000010");
$integralRwardInfos->setExchangeCount("2");
$integralRwardInfos->setMemDayAllLimit("22");
$integralRwardInfos->setPicUrl("//image.suning.cn/uimg/mpms/promotion/152026760052716646.jpg");
$integralRwardInfos->setRewardDesc("国行正品");
$integralRwardInfos->setRewardName("iP8");
$integralRwardInfos->setTotalBudgetCount("100");
$req->setIntegralRwardInfos(array($integralRwardInfos));
$req->setShopCode("300009484");
$req->setStartTime("2019-01-29 01:02:02");

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