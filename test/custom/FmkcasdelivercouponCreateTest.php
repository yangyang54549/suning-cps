<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-24
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new FmkcasdelivercouponCreateRequest();
//赋值……
$req->setActivityCode("SFZF20290330M011111");
$req->setAppToken("TIvRyrNeojpnVnBk63Utga7e3");
$req->setAppType("03");
$req->setBuddleId("abcdef");
$req->setBusinessScene("USER_PULL_DOWN");
$req->setClientIp("192.168.1.1");
$req->setCouponsAmount("1");
$req->setDeliverSource("ECOUPON-0003");
$req->setEgoToken("TIvRyrNeojpnVnBk63Utga7e3");
$req->setIdNo("333333333333333333");
$req->setInvoker("ossas");
$req->setMemberId("1900211111");
$req->setPcToken("TIvRyrNeojpnVnBk63Utga7e3");
$req->setPhoneNo("13011111111");
$req->setRealName("你好S");
$req->setRequestId("05257b0a296d40439a9ad212da196a84");
$req->setRequestKey("dkjfkdj");
$req->setRequestNo("a018ec2c289e448f8341f07eb3195a37");
$req->setTerminalType("APP");

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