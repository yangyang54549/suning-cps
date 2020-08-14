<?php
/**
 * 
 *
 * @author suning
 * @date   2019-1-10
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new FreevoucherCreateRequest();
//赋值……
$req->setActivityId("201806280000391246");
$req->setActivitySecretKey("puV2Lfm46us2NGVVFELKoOKe");
$req->setChanId("01");
$req->setCity("北京");
$req->setCouponAmount("5.00");
$req->setCouponGetSource("2053");
$req->setMemberNo("6001858356");
$req->setMobileNum("AWsWFq/OnVeM6ZusgkSb2w==");
$req->setOperateType("2");
$req->setOrderId("dd201811201200001234");

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