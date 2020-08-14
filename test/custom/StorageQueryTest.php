<?php
/**
 * 
 *
 * @author suning
 * @date   2019-7-5
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new StorageQueryRequest();
//赋值……
$storage = new Storage();
$storage->setBillNo("取单号的值（订单维度），例如：32281421244");
$storage->setBillType("01：OMS单号 02：OMS行号 03：B2C单号 04：B2C行号 返回报文时，返回对应行号");
$storage->setSaleOrg("举例：70066253");
$storage->setSaleTaxNo("91320106773973920L");
$req->setStorage(array($storage));

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