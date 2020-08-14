<?php
/**
 * 
 *
 * @author suning
 * @date   2020-5-15
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__) . '/../../DefaultSuningClient.php');
$req = new SearchcommodityQueryRequest();
//赋值……
$req->setBranch("1");
$req->setCityCode("025");
$req->setCoupon("1");
$req->setCouponMark("1");
$req->setEndPrice("20.00");
$req->setKeyword("手机");
$req->setPageIndex("1");
$req->setPgSearch("1");
$req->setPicHeight("200");
$req->setPicWidth("200");
$req->setSaleCategoryCode("50000");
$req->setSize("10");
$req->setSnfwservice("1");
$req->setSnhwg("1");
$req->setSortType("1");
$req->setStartPrice("10.00");
$req->setSuningService("1");

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