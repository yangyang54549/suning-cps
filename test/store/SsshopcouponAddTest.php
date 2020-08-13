<?php
/**
 * 
 *
 * @author suning
 * @date   2019-3-21
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new SsshopcouponAddRequest();
//赋值……
$req->setActivityEndTime("到分 2018-01-01 00:00");
$req->setActivityName("618大促发券活动");
$req->setActivityStartTime("到分，2018-01-01 00:00");
$req->setAppStoreCode("1111111");
$req->setBaseAmount("正整数1~999999999");
$req->setBaseQuantifierType("1:满");
$req->setCirculation("正整数:1~999999999");
$req->setCouponType("1:店铺易券");
$req->setDenomination("正整数 1~3000");
$req->setDynamicDistanceTimeDelay("整数：0~90");
$req->setDynamicTime("整数：0~90");
$req->setEffectiveEndTime("到分钟2018-01-01 00:00");
$req->setEffectiveStartTime("到分 2018-01-01 00:00");
$req->setGrantCountEveryday("正整数");
$req->setLimitCollarCount("0：不限  1:一张 2：二张 3：三张 4：四张 5：五张");
$req->setLimitCollarEveyDay("0：不限  1:一张 2：二张 3：三张 4：四张 5：五张");
$req->setShopCode("S03017113");
$req->setShowRegion("1,8");
$req->setUseChannelStr("多个以逗号隔开 55,56,57");
$req->setValidityType(" 1:固定时间 2：动态时间");
$req->setVoucheObject("1：不限");

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