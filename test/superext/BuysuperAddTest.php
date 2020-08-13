<?php
/**
 * 
 *
 * @author suning
 * @date   2019-10-22
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new BuysuperAddRequest();
//赋值……
$req->setAppCode("TENCENT");
$req->setBusinessSource("1");
$req->setGoodsNoConfigId("goodsNoConfigId");
$req->setMixCustNum("5cbe0adc4a61447aa1ec5bca92ac52677fa5328da696492c");
$req->setPackageType("1");
$req->setPhone("13800000000");
$req->setSeqId("01234567890123456789012345678912");

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