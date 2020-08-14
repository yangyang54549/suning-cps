<?php
/**
 * 
 *
 * @author suning
 * @date   2020-4-13
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new CustCreateRequest();
//赋值……
$req->setAccessKeyId("1231432545435");
$req->setAccessSign("ca614d6d8289ec263462d64d5e465930");
$req->setAuthType("0");
$req->setFilesContents("aHR0cCUzQS8vd3d3LmJhaWR1LmNvbS9pbWcvaGFoYWg=,aHR0cCUzQS8vd3d3LmNuc3VuaW5nLmNvbS9kZC5wbmc=");
$req->setFilesSuffix("jpeg,png");
$req->setTimeStamp("1584429071000");
$req->setUserId("hqesdww1100");

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