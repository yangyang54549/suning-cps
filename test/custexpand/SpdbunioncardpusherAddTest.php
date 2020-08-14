<?php
/**
 * 
 *
 * @author suning
 * @date   2019-7-12
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new SpdbunioncardpusherAddRequest();
//赋值……
$req->setData("8831dfe9a08c60fa7da08536ad8bc279d754090e098eb251bb096552299f8e6ad4fc1bc6a9e924fdfa1a3d850d3cf267d3e507631fa14fa92e6e95f2feeacb8ceff69ec46ca01d92a82362aa46e63d2c65d5418db363b8c724c15fd50cd18f54f95a6fcfeb440972646f571e1ad40f2c098ed9d6def48e15c54bd148ec127d97f2f1ec5982636189373851346f95601c");
$req->setSign("479a2762c8f35fa3cd9f8e745d438bf9");

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