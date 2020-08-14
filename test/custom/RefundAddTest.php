<?php
/**
 * 
 *
 * @author suning
 * @date   2019-11-15
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new RefundAddRequest();
//赋值……
$req->setAmount("21");
$req->setFixedEndTime("2");
$req->setFixedStartTime("3");
$req->setHolidayEndTime("2019-10-28 15:00:00");
$req->setHolidayStartTime("2019-10-28 14:00:00");
$req->setPayTime("12");
$req->setRefundTime("12");
$req->setTabNumber("1");

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