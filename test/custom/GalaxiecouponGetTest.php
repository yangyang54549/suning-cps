<?php
/**
 * 
 *
 * @author suning
 * @date   2020-5-16
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new GalaxiecouponGetRequest();
//赋值……
$req->setActivityId("202004010001299290");
$req->setActivitySecretKey("fXO2jW434G9EXtTUelN71K5U");
$req->setAppVersion("8.7.2.3");
$req->setBonusTrigerId("3");
$req->setCityId("2");
$req->setDetect("mmds_97fc62e6ea2c41abf7745f51622c67b3");
$req->setDfpToken("THc0gl1713dc37bc5gJJx2a58");
$req->setIdfToken("THE0Kg17157544d8fsIFbb0d0___w7DDp8KLw75ow5MZbMOyImjCqsONBcOFw7hawqrCssOg");
$req->setMemberId("1234567890");
$req->setMiniSource("wechat");
$req->setRequestIp("10.96.193.66");
$req->setSerialNo("snyg612_39eaf0e06bbc54c387425bd94990f80c");
$req->setSnUnionId("bfb3ae009a31e98f4fa13ee41c6cbfb3ae01f9a31e9884fa");
$req->setTerminalId("32");
$req->setTermiSys("Windows");
$req->setValiNo("202004010001299291+6002318564");

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